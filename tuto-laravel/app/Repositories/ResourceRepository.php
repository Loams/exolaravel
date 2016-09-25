<?php

namespace App\Repositories;

abstract class ResourceRepository
{
	protected $model;
	
	public function getPaginate($n)
	{
		return $this->model->paginate($n);
	}
	
	public function store(Array $inputs)
	{
		return $this->model->create($inputs);
	}
	
	public function getById($id)
	{
		return $this->model->findOrFail($id);
	}
	
	public function update($id, Array $inputs)
	{
		return $this->getById($id)->update($inputs);
	}
	
	public function destroy($id)
	{
		return $this->getById($id)->delete();
	}
}
