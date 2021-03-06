<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateusersAPIRequest;
use App\Http\Requests\API\UpdateusersAPIRequest;
use App\Models\users;
use App\Repositories\usersRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\usersResource;
use Response;

/**
 * Class usersController
 * @package App\Http\Controllers\API
 */

class usersAPIController extends AppBaseController
{
    /** @var  usersRepository */
    private $usersRepository;

    public function __construct(usersRepository $usersRepo)
    {
        $this->usersRepository = $usersRepo;
    }

    /**
     * Display a listing of the users.
     * GET|HEAD /users
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $users = $this->usersRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(usersResource::collection($users), 'Users retrieved successfully');
    }

    /**
     * Store a newly created users in storage.
     * POST /users
     *
     * @param CreateusersAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateusersAPIRequest $request)
    {
        $input = $request->all();

        $users = $this->usersRepository->create($input);

        return $this->sendResponse(new usersResource($users), 'Users saved successfully');
    }

    /**
     * Display the specified users.
     * GET|HEAD /users/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var users $users */
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            return $this->sendError('Users not found');
        }

        return $this->sendResponse(new usersResource($users), 'Users retrieved successfully');
    }

    /**
     * Update the specified users in storage.
     * PUT/PATCH /users/{id}
     *
     * @param int $id
     * @param UpdateusersAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateusersAPIRequest $request)
    {
        $input = $request->all();

        /** @var users $users */
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            return $this->sendError('Users not found');
        }

        $users = $this->usersRepository->update($input, $id);

        return $this->sendResponse(new usersResource($users), 'users updated successfully');
    }

    /**
     * Remove the specified users from storage.
     * DELETE /users/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var users $users */
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            return $this->sendError('Users not found');
        }

        $users->delete();

        return $this->sendSuccess('Users deleted successfully');
    }
}
