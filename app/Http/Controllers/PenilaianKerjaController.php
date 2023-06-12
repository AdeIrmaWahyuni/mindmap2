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
        $input = $request->all();

        $input['users_id'] = Auth::User()->id;

        $penilaianKerja = $this->penilaianKerjaRepository->create($input);

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

        return view('penilaian_kerjas.show')->with('penilaianKerja', $penilaianKerja);
    }

    /**
     * Show the form for editing the specified PenilaianKerja.
     */
    public function edit($id)
    {
        $penilaianKerja = $this->penilaianKerjaRepository->find($id);

        if (empty($penilaianKerja)) {
            Flash::error('Penilaian Kerja not found');

            return redirect(route('penilaianKerjas.index'));
        }
        $pemisahs = Pemisah::pluck('nama','id');    
        return view('penilaian_kerjas.edit')->with('penilaianKerja', $penilaianKerja)->with('pemisahs', $pemisahs);
    }

    /**
     * Update the specified PenilaianKerja in storage.
     */
    public function update($id, UpdatePenilaianKerjaRequest $request)
    {
        $penilaianKerja = $this->penilaianKerjaRepository->find($id);

        if (empty($penilaianKerja)) {
            Flash::error('Penilaian Kerja not found');

            return redirect(route('penilaianKerjas.index'));
        }
        // $input['users_id'] = Auth::User()->id;
        $penilaianKerja = $this->penilaianKerjaRepository->update($request->all(), $id);

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

        $this->penilaianKerjaRepository->delete($id);

        Flash::success('Penilaian Kerja deleted successfully.');

        return redirect(route('penilaianKerjas.index'));
    }
}
