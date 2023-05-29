<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePemisahRequest;
use App\Http\Requests\UpdatePemisahRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PemisahRepository;
use Illuminate\Http\Request;
use Flash;

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
        $input = $request->all();

        $pemisah = $this->pemisahRepository->create($input);

        Flash::success('Pemisah saved successfully.');

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

        $pemisah = $this->pemisahRepository->update($request->all(), $id);

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

        Flash::success('Pemisah deleted successfully.');

        return redirect(route('pemisahs.index'));
    }
}
