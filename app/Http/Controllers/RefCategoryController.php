<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRefCategoryRequest;
use App\Http\Requests\UpdateRefCategoryRequest;
use App\Repositories\RefCategoryRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\RefCategory;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class RefCategoryController extends AppBaseController
{
    /** @var  RefCategoryRepository */
    private $refCategoryRepository;

    public function __construct(RefCategoryRepository $refCategoryRepo)
    {
        $this->refCategoryRepository = $refCategoryRepo;
    }

    /**
     * Display a listing of the RefCategory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $refCategories = $this->refCategoryRepository->all();

        return view('ref_categories.index')
            ->with('refCategories', $refCategories);
    }

    public function refs($user_id = null, $ref_category_id = null){

                if(!$user_id){
                    return redirect(route('/login'));
                }

                if($ref_category_id){

                    $refCategory = RefCategory::where('id', $ref_category_id)->first();

                 RefCategory::where('id', $ref_category_id)->update([
                        'referral_visits' => $refCategory->referral_visits + 1,
                        'referral_count' => $refCategory->referral_count + 1

                    ]);
                 }



                return response(route('/register'))
                ->cookie('referral_user_id',$user_id, 60*24*30*12)
                ->cookie('referral_user_id',$ref_category_id, 60*24*30*12);


    }
    /**
     * Show the form for creating a new RefCategory.
     *
     * @return Response
     */
    public function create()
    {
        return view('ref_categories.create');
    }

    /**
     * Store a newly created RefCategory in storage.
     *
     * @param CreateRefCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateRefCategoryRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;

        $refCategory = $this->refCategoryRepository->create($input);

        Flash::success('Ref Category saved successfully.');

        return redirect(route('refCategories.index'));
    }

    /**
     * Display the specified RefCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $refCategory = $this->refCategoryRepository->find($id);

        if (empty($refCategory)) {
            Flash::error('Ref Category not found');

            return redirect(route('refCategories.index'));
        }

        return view('ref_categories.show')->with('refCategory', $refCategory);
    }

    /**
     * Show the form for editing the specified RefCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $refCategory = $this->refCategoryRepository->find($id);

        if (empty($refCategory)) {
            Flash::error('Ref Category not found');

            return redirect(route('refCategories.index'));
        }

        return view('ref_categories.edit')->with('refCategory', $refCategory);
    }

    /**
     * Update the specified RefCategory in storage.
     *
     * @param int $id
     * @param UpdateRefCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRefCategoryRequest $request)
    {
        $refCategory = $this->refCategoryRepository->find($id);

        if (empty($refCategory)) {
            Flash::error('Ref Category not found');

            return redirect(route('refCategories.index'));
        }

        $refCategory = $this->refCategoryRepository->update($request->all(), $id);

        Flash::success('Ref Category updated successfully.');

        return redirect(route('refCategories.index'));
    }

    /**
     * Remove the specified RefCategory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $refCategory = $this->refCategoryRepository->find($id);

        if (empty($refCategory)) {
            Flash::error('Ref Category not found');

            return redirect(route('refCategories.index'));
        }

        $this->refCategoryRepository->delete($id);

        Flash::success('Ref Category deleted successfully.');

        return redirect(route('refCategories.index'));
    }
}
