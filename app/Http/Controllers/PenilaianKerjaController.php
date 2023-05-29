<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePenilaianKerjaRequest;
use App\Http\Requests\UpdatePenilaianKerjaRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PenilaianKerjaRepository;
use Illuminate\Http\Request;
use Flash;

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
        $penilaianKerjas = $this->penilaianKerjaRepository->paginate(10);

        return view('penilaian_kerjas.index')
            ->with('penilaianKerjas', $penilaianKerjas);
    }

    /**
     * Show the form for creating a new PenilaianKerja.
     */
    public function create()
    {
        return view('penilaian_kerjas.create');
    }

    /**
     * Store a newly created PenilaianKerja in storage.
     */
    public function store(CreatePenilaianKerjaRequest $request)
    {
        $input = $request->all();

        $penilaianKerja = $this->penilaianKerjaRepository->create($input);

        Flash::success('Penilaian Kerja saved successfully.');

        return redirect(route('penilaianKerja.index'));
    }

    /**
     * Display the specified PenilaianKerja.
     */
    public function show($id)
    {
        $penilaianKerja = $this->penilaianKerjaRepository->find($id);

        if (empty($penilaianKerja)) {
            Flash::error('Penilaian Kerja not found');

            return redirect(route('penilaianKerja.index'));
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

            return redirect(route('penilaianKerja.index'));
        }

        return view('penilaian_kerjas.edit')->with('penilaianKerja', $penilaianKerja);
    }

    /**
     * Update the specified PenilaianKerja in storage.
     */
    public function update($id, UpdatePenilaianKerjaRequest $request)
    {
        $penilaianKerja = $this->penilaianKerjaRepository->find($id);

        if (empty($penilaianKerja)) {
            Flash::error('Penilaian Kerja not found');

            return redirect(route('penilaianKerja.index'));
        }

        $penilaianKerja = $this->penilaianKerjaRepository->update($request->all(), $id);

        Flash::success('Penilaian Kerja updated successfully.');

        return redirect(route('penilaianKerja.index'));
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

            return redirect(route('penilaianKerja.index'));
        }

        $this->penilaianKerjaRepository->delete($id);

        Flash::success('Penilaian Kerja deleted successfully.');

        return redirect(route('penilaianKerja.index'));
    }
}
