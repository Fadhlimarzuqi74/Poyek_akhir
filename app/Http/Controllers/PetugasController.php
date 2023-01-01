<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePetugasRequest;
use App\Http\Requests\UpdatePetugasRequest;
use App\Repositories\PetugasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PetugasController extends AppBaseController
{
    /** @var PetugasRepository $petugasRepository*/
    private $petugasRepository;

    public function __construct(PetugasRepository $petugasRepo)
    {
        $this->petugasRepository = $petugasRepo;
    }

    /**
     * Display a listing of the Petugas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $petugas = $this->petugasRepository->all();

        return view('petugas.index')
            ->with('petugas', $petugas);
    }

    /**
     * Show the form for creating a new Petugas.
     *
     * @return Response
     */
    public function create()
    {
        return view('petugas.create');
    }

    /**
     * Store a newly created Petugas in storage.
     *
     * @param CreatePetugasRequest $request
     *
     * @return Response
     */
    public function store(CreatePetugasRequest $request)
    {
        $input = $request->all();

        $petugas = $this->petugasRepository->create($input);

        Flash::success('Petugas saved successfully.');

        return redirect(route('petugas.index'));
    }

    /**
     * Display the specified Petugas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $petugas = $this->petugasRepository->find($id);

        if (empty($petugas)) {
            Flash::error('Petugas not found');

            return redirect(route('petugas.index'));
        }

        return view('petugas.show')->with('petugas', $petugas);
    }

    /**
     * Show the form for editing the specified Petugas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $petugas = $this->petugasRepository->find($id);

        if (empty($petugas)) {
            Flash::error('Petugas not found');

            return redirect(route('petugas.index'));
        }

        return view('petugas.edit')->with('petugas', $petugas);
    }

    /**
     * Update the specified Petugas in storage.
     *
     * @param int $id
     * @param UpdatePetugasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePetugasRequest $request)
    {
        $petugas = $this->petugasRepository->find($id);

        if (empty($petugas)) {
            Flash::error('Petugas not found');

            return redirect(route('petugas.index'));
        }

        $petugas = $this->petugasRepository->update($request->all(), $id);

        Flash::success('Petugas updated successfully.');

        return redirect(route('petugas.index'));
    }

    /**
     * Remove the specified Petugas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $petugas = $this->petugasRepository->find($id);

        if (empty($petugas)) {
            Flash::error('Petugas not found');

            return redirect(route('petugas.index'));
        }

        $this->petugasRepository->delete($id);

        Flash::success('Petugas deleted successfully.');

        return redirect(route('petugas.index'));
    }
}
