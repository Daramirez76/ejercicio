<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SongService;

abstract class Controller
{
    protected $songService;    

    public function __construct(SongService $songService)
    {
        $this->songService = $songService;
    }
    public function index()
    {
        return $this->songService->getAllSongs();
    }
    public function show($id)
    {
        return $this->songService->getSongById($id);
    }
    public function store(Request $request)
    {
        return $this->songService->createSong($request->all());
    }
    public function update(Request $request, $id)
    {
        return $this->songService->updateSong($id, $request->all());
    }
    public function destroy($id)
    {
        return $this->songService->deleteSong($id);
    }
}
