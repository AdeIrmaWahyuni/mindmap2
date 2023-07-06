<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePenilaianKerjaRequest;
use App\Http\Requests\UpdatePenilaianKerjaRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PenilaianKerjaRepository;
use Illuminate\Http\Request;
use App\Models\Pemisah;
use App\Models\PenilaianKerja;
use Flash;
use App\Models\Log;
use Auth;

class PenilaianKerjaController extends AppBaseController
{
    /** @var PenilaianKerjaRepository $penilaianKerjaRepository*/
    private $penilaianKerjaRepository;

    public function __construct(PenilaianKerjaRepository $penilaianKerjaRepo)
    {
        $this->penilaianKerjaRepository = $penilaianKerjaRepo;
    }

    /**
     * Display a listing of the PenilaianKerja.
     */
    public function index(Request $request)
    
    {
        $pemisahs = Pemisah::all();


        foreach ($pemisahs as $pemisah) {
            $penilaianKerja = PenilaianKerja::where('pemisah_id',$pemisah->id)->get();
            
            foreach ($penilaianKerja as $penilaianKerjax) {
                $penilaianKerjax['linkArray'] = explode(PHP_EOL, $penilaianKerjax->link);
            }
            $pemisah['penilaianKerjap'] = $penilaianKerja;

        }


        return view('penilaian_kerjas.index')
            ->with('pemisahs', $pemisahs);
    }

    /**
     * Show the form for creating a new PenilaianKerja.
     */
    public function create()
    {
        $pemisahs = Pemisah::pluck('nama','id');
        return view('penilaian_kerjas.create')->with('pemisahs', $pemisahs);
    }

    /**
     * Store a newly created PenilaianKerja in storage.
     */
    public function store(CreatePenilaianKerjaRequest $request)
    {
        // return $request->file('files');
        $input = $request->all();
        $input['users_id'] = Auth::User()->id;

        $penilaianKerja = $this->penilaianKerjaRepository->create($input);
        
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $penilaianKerja->addMedia($file)->toMediaCollection('file');
            }
        }

        $pemisah = Pemisah::where('id',$request->pemisah_id)->first();

        $log = Log::create([
            'pesan' => "Menambah Data Penilaian Kerja " . $request->no_butir." Pada Kriteria " . $pemisah->nama,
            'users_id' => Auth::User()->id
        ]);
        $log->save();

        Flash::success('Penilaian Kerja saved successfully.');

        return redirect(route('penilaianKerjas.index'));
    }

    /**
     * Display the specified PenilaianKerja.
     */
    public function show($id)
    {
        $penilaianKerja = $this->penilaianKerjaRepository->find($id);

        if (empty($penilaianKerja)) {
            Flash::error('Penilaian Kerja not found');

            return redirect(route('penilaianKerjas.index'));
        }

        $files = [];
        foreach ($penilaianKerja->getMedia('file') as $media) {
            $files[] = $media;
        }

        return view('penilaian_kerjas.show', compact('penilaianKerja', 'files'));
    }

    /**
     * Show the form for editing the specified PenilaianKerja.
     */
    public function edit($id)
    {
        $penilaianKerja = $this->penilaianKerjaRepository->find($id);

        
        $files = [];
        foreach ($penilaianKerja->getMedia('file') as $media) {
            $files[] = $media;
        }

        if (empty($penilaianKerja)) {
            Flash::error('Penilaian Kerja not found');

            return redirect(route('penilaianKerjas.index'));
        }

        // return $files;
        $pemisahs = Pemisah::pluck('nama','id');    
        return view('penilaian_kerjas.edit', compact('pemisahs','penilaianKerja', 'files'));
    }

    /**
     * Update the specified PenilaianKerja in storage.
     */
    public function update($id, UpdatePenilaianKerjaRequest $request)
    {
        $penilaianKerjaLama = $penilaianKerja = $this->penilaianKerjaRepository->find($id);
        $pemisahLama = Pemisah::where('id',$request->pemisah_id)->first();
        $pemisahLama = $pemisahLama->nama;
        if (empty($penilaianKerja)) {
            Flash::error('Penilaian Kerja not found');

            return redirect(route('penilaianKerjas.index'));
        }

        $penilaianKerja = $this->penilaianKerjaRepository->update($request->all(), $id);
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $penilaianKerja->addMedia($file)->toMediaCollection('file');
            }
        }
        $rangkaiPesan = 'Memperbarui Data Penilaian Kerja ' . $penilaianKerja->nama ;
        // return $penilaianKerja;
        if ($penilaianKerjaLama->no_butir != $penilaianKerja->no_butir) {
            $rangkaiPesan .= "\n Nomer Butir " . $penilaianKerjaLama->no_butir . ' Menjadi ' . $penilaianKerja->no_butir;
        }
        if ($penilaianKerjaLama->bobot_penilaian != $penilaianKerja->bobot_penilaian) {
            $rangkaiPesan .= "\n, Bobot Penilaian " . $penilaianKerjaLama->bobot_penilaian . ' Menjadi ' . $penilaianKerja->bobot_penilaian;
        }
        if ($penilaianKerjaLama->elemen_penilaian != $penilaianKerja->elemen_penilaian) {
            $rangkaiPesan .= "\n, Elemen Penilaian " . $penilaianKerjaLama->elemen_penilaian . ' Menjadi ' . $penilaianKerja->elemen_penilaian;
        }
        if ($penilaianKerjaLama->baik_jika != $penilaianKerja->baik_jika) {
            $rangkaiPesan .= "\n, Baik Jika " . $penilaianKerjaLama->baik_jika . ' Menjadi ' . $penilaianKerja->baik_jika;
        }
        if ($penilaianKerjaLama->penilaian != $penilaianKerja->penilaian) {
            $rangkaiPesan .= "\n, Penilaian " . $penilaianKerjaLama->penilaian . ' Menjadi ' . $penilaianKerja->penilaian;
        }
        if ($penilaianKerjaLama->link != $penilaianKerja->link) {
            $rangkaiPesan .= "\n, Link " . $penilaianKerjaLama->link . ' Menjadi ' . $penilaianKerja->link;
        }
        if ($penilaianKerjaLama->hasil_asesmen != $penilaianKerja->hasil_asesmen) {
            $rangkaiPesan .= "\n, Hasil Asesmen " . $penilaianKerjaLama->hasil_asesmen . ' Menjadi ' . $penilaianKerja->hasil_asesmen;
        }
        if ($penilaianKerjaLama->pemisah_id != $penilaianKerja->pemisah_id) {
            $pemisahBaru = Pemisah::where('id',$penilaianKerja->pemisah_id)->first();
            $pemisahBaru = $pemisahBaru->nama;
            $rangkaiPesan .= "\n, Kereteria Menjadi " . $pemisahBaru;
        }else{
            $pemisah = Pemisah::where('id',$request->pemisah_id)->first();
            $rangkaiPesan .= ' Pada Kriteria ' . $pemisah->nama;
        }
            
        $log = Log::create([
            'pesan' => $rangkaiPesan,
            'users_id' => Auth::User()->id
        ]);
        Flash::success('Penilaian Kerja updated successfully.');

        return redirect(route('penilaianKerjas.index'));
    }

    /**
     * Remove the specified PenilaianKerja from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $penilaianKerja = $this->penilaianKerjaRepository->find($id);

        if (empty($penilaianKerja)) {
            Flash::error('Penilaian Kerja not found');

            return redirect(route('penilaianKerjas.index'));
        }

        $penilaianKerja->clearMediaCollection('file');

        $this->penilaianKerjaRepository->delete($id);
        $pemisah = Pemisah::where('id',$penilaianKerja->pemisah_id)->first();
        $log = Log::create([
            'pesan' => 'Menghapus Data Penilaian Kerja, Dengan Nomer Butir ' . $penilaianKerja->no_butir . ' Pada Kriteria '. $pemisah->nama,
            'users_id' => Auth::User()->id
        ]);

        Flash::success('Penilaian Kerja deleted successfully.');

        return redirect(route('penilaianKerjas.index'));
    }
}
