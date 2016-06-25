<?php

namespace App\Modules\ArmaLife\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Controllers\Controller;

use App\Modules\ArmaLife\Http\Requests\PlayerUpdateRequest;
use App\Modules\ArmaLife\Repositories\PlayerRepository;

class PlayerController extends Controller
{

    /**
     * @var PlayerRepository
     */
    protected $repository;


    public function __construct(PlayerRepository $repository)
    {
        $this->repository = $repository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        return $this->repository->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->repository->find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UserUpdateRequest $request
     * @param  int            $id
     *
     * @return Response
     */
    public function update(PlayerUpdateRequest $request, $id)
    {
        return $this->repository->update($request->all(), $id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->repository->delete($id);
    }
}
