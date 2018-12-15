<table class="table table-hover mb-0">
    <caption class="pb-0">
        {{ $result[$entityGroup]->count() }} {{ str_plural(str_singular($entityGroup), $result[$entityGroup]->count()) }} found
    </caption>
    <colgroup>
        <col>
        <col width="100">
        <col width="100">
        <col width="50">
        <col width="50">
        <col width="32">
    </colgroup>
    <thead>
        <tr>
            <th>Name</th>
            <th class="text-center">Rarity</th>
            <th class="text-center">Type</th>
            <th class="text-center">Level</th>
            <th class="text-center">Cost</th>
            <th class="text-center">Faction</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($result[$entityGroup] as $unit)
            <tr>
                <td>
                    @php($imgPath = "assets/images/icons/units/{$unit->slug}.png")

                    @if (file_exists(public_path($imgPath)))
                        <img src="/{{ $imgPath }}" alt="{{ $unit->name }} Icon" style="width: 32px;" class="rounded mr-1">
                    @endif

                    <a href="{{ route('database.units.show', $unit->slug) }}">{{ $unit->name }}</a>
                </td>
                <td class="text-center">
                    {{ ucfirst($unit->rarity) }}
                </td>
                <td class="text-center">
                    {{ ucfirst($unit->type)  }}
                </td>
                <td class="text-center">
                    {{ $unit->unlocked_at_level }}
                </td>
                <td class="text-center">
                    {{ $unit->cost }}
                </td>
                <td class="text-center">
                    <img src="/assets/images/icons/factions/{{ $unit->faction->slug }}.png" alt="{{ $unit->faction->name }} Icon" style="width: 32px;">
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
