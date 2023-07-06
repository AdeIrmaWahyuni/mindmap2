<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePemisahRequest;
use App\Http\Requests\UpdatePemisahRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PemisahRepository;
use Illuminate\Http\Request;
use App\Models\Log;
use App\Models\Pemisah;
use Flash;
use DB;
use Auth;

class PemisahController extends AppBaseController
{
    /** @var PemisahRepository $pemisahRepository*/
    private $pemisahRepository;

    public function __construct(PemisahRepository $pemisahRepo)
    {
        $this->pemisahRepository = $pemisahRepo;
    }

    /**
     * Display a listing of the Pemisah.
     */
    public function index(Request $request)
    {
        $pemisahs = $this->pemisahRepository->paginate(10);

        return view('pemisahs.index')
            ->with('pemisahs', $pemisahs);
    }

    /**
     * Show the form for creating a new Pemisah.
     */
    public function create()
    {
        return view('pemisahs.create');
    }

    /**
     * Store a newly created Pemisah in storage.
     */
    public function store(CreatePemisahRequest $request)
    {
        //andi Menambah pemisah
        $input = $request->all();
        $pemisah = $this->pemisahRepository->create($input);
        $log = Log::create([
            'pesan' => 'Menambah pemisah ' . $request->nama,
            'users_id' => Auth::User()->id
        ]);
        $log->save();
        Flash::success('Pemisah saved successfully.');
        // try{
        //     DB::beginTransaction();
            
            
           

            
        //     DB::commit();
        //     Flash::success("Data berhasil ditambahkan");
        // // return $user;
        // }catch (Exception $e){
        //     DB::rollBack();
        //     Flash::error($e);   
        // }

        return redirect(route('pemisahs.index'));
    }

    
    /**
     * Display the specified Pemisah.
     */
    public function show($id)
    {
        $pemisah = $this->pemisahRepository->find($id);

        if (empty($pemisah)) {
            Flash::error('Pemisah not found');

            return redirect(route('pemisahs.index'));
        }

        return view('pemisahs.show')->with('pemisah', $pemisah);
    }

    /**
     * Show the form for editing the specified Pemisah.
     */
    public function edit($id)
    {
        $pemisah = $this->pemisahRepository->find($id);

        if (empty($pemisah)) {
            Flash::error('Pemisah not found');

            return redirect(route('pemisahs.index'));
        }

        return view('pemisahs.edit')->with('pemisah', $pemisah);
    }

    /**
     * Update the specified Pemisah in storage.
     */
    public function update($id, UpdatePemisahRequest $request)
    {
        $pemisah = $this->pemisahRepository->find($id);

        if (empty($pemisah)) {
            Flash::error('Pemisah not found');

            return redirect(route('pemisahs.index'));
        }
        $pemisahLama = Pemisah::find($id);
        $pemisah = $this->pemisahRepository->update($request->all(), $id);
        $log = Log::create([
            'pesan' => 'Memperbarui Pemisah ' . $pemisahLama->nama . ' Menjadi ' . $pemisah->nama,
            'users_id' => Auth::User()->id
        ]);
        $log->save();

        Flash::success('Pemisah updated successfully.');

        return redirect(route('pemisahs.index'));
    }

    /**
     * Remove the specified Pemisah from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pemisah = $this->pemisahRepository->find($id);

        if (empty($pemisah)) {
            Flash::error('Pemisah not found');

            return redirect(route('pemisahs.index'));
        }

        $this->pemisahRepository->delete($id);
        $log = Log::create([
            'pesan' => 'Menghapus Kriteria' . $pemisah->nama,
            'users_id' => Auth::User()->id
        ]);
        $log->save();

        Flash::success('Pemisah deleted successfully.');

        return redirect(route('pemisahs.index'));
    }
}
