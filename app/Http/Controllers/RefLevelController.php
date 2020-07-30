<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRefLevelRequest;
use App\Http\Requests\UpdateRefLevelRequest;
use App\Repositories\RefLevelRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RefLevelController extends AppBaseController
{
    /** @var  RefLevelRepository */
    private $refLevelRepository;

    public function __construct(RefLevelRepository $refLevelRepo)
    {
        $this->refLevelRepository = $refLevelRepo;
    }

    /**
     * Display a listing of the RefLevel.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $refLevels = $this->refLevelRepository->all();

        return view('ref_levels.index')
            ->with('refLevels', $refLevels);
    }

    /**
     * Show the form for creating a new RefLevel.
     *
     * @return Response
     */
    public function create()
    {
        return view('ref_levels.create');
    }

    /**
     * Store a newly created RefLevel in storage.
     *
     * @param CreateRefLevelRequest $request
     *
     * @return Response
     */
    public function store(CreateRefLevelRequest $request)
    {
        $input = $request->all();

        $refLevel = $this->refLevelRepository->create($input);

        Flash::success('Ref Level saved successfully.');

        return redirect(route('refLevels.index'));
    }

    /**
     * Display the specified RefLevel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $refLevel = $this->refLevelRepository->find($id);

        if (empty($refLevel)) {
            Flash::error('Ref Level not found');

            return redirect(route('refLevels.index'));
        }

        return view('ref_levels.show')->with('refLevel', $refLevel);
    }

    /**
     * Show the form for editing the specified RefLevel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $refLevel = $this->refLevelRepository->find($id);

        if (empty($refLevel)) {
            Flash::error('Ref Level not found');

            return redirect(route('refLevels.index'));
        }

        return view('ref_levels.edit')->with('refLevel', $refLevel);
    }

    /**
     * Update the specified RefLevel in storage.
     *
     * @param int $id
     * @param UpdateRefLevelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRefLevelRequest $request)
    {
        $refLevel = $this->refLevelRepository->find($id);

        if (empty($refLevel)) {
            Flash::error('Ref Level not found');

            return redirect(route('refLevels.index'));
        }

        $refLevel = $this->refLevelRepository->update($request->all(), $id);

        Flash::success('Ref Level updated successfully.');

        return redirect(route('refLevels.index'));
    }

    /**
     * Remove the specified RefLevel from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $refLevel = $this->refLevelRepository->find($id);

        if (empty($refLevel)) {
            Flash::error('Ref Level not found');

            return redirect(route('refLevels.index'));
        }

        $this->refLevelRepository->delete($id);

        Flash::success('Ref Level deleted successfully.');

        return redirect(route('refLevels.index'));
    }
}
