<?php

namespace App\Repositories\Contracts;

use App\Models\TeamMember;
use Illuminate\Support\Collection;

interface TeamMemberRepositoryInterface
{
    public function all(): Collection;
    public function active(): array;
    public function find(int $id): ?TeamMember;
    public function create(array $data): TeamMember;
    public function update(TeamMember $member, array $data): TeamMember;
    public function delete(TeamMember $member): void;
}
