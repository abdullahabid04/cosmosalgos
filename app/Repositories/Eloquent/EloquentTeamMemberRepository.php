<?php

namespace App\Repositories\Eloquent;

use App\Models\TeamMember;
use App\Repositories\Contracts\TeamMemberRepositoryInterface;
use Illuminate\Support\Collection;

class EloquentTeamMemberRepository implements TeamMemberRepositoryInterface
{
    public function all(): Collection
    {
        return TeamMember::ordered()->get();
    }

    public function active(): array
    {
        return TeamMember::active()->get()->toArray();
    }

    public function find(int $id): ?TeamMember
    {
        return TeamMember::find($id);
    }

    public function create(array $data): TeamMember
    {
        return TeamMember::create($data);
    }

    public function update(TeamMember $member, array $data): TeamMember
    {
        $member->update($data);
        return $member->fresh();
    }

    public function delete(TeamMember $member): void
    {
        $member->clearMediaCollection('avatar');
        $member->delete();
    }
}
