<?php
namespace App\Interface;

interface ProjectoInterface{
    public function findAll();

    public function findOrFail(string $id);

    public function create(array $data);

    public function update(array $data, string $id);

    public function delete(string $id);
}
