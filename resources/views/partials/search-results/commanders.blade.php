<table class="table table-hover mb-0">
    <caption class="pb-0">
        {{ $result[$entityGroup]->count() }} {{ str_plural(str_singular($entityGroup), $result[$entityGroup]->count()) }} found
    </caption>
    <colgroup>
        <col>
        <col>
        <col width="100">
        <col width="50">
        <col width="32">
    </colgroup>
    <thead>
        <tr>
            <th>Name</th>
            <th>Power</th>
            <th class="text-center">Rarity</th>
            <th class="text-center">Level</th>
            <th class="text-center">Faction</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($result[$entityGroup] as $commander)
            <tr>
                <td>
                    @php($imgPath = "assets/images/icons/commanders/{$commander->slug}.png")

                    @if (file_exists(public_path($imgPath)))
                        <img src="/{{ $imgPath }}" alt="{{ $commander->name }} Icon" style="width: 32px;" class="rounded mr-1">
                    @endif

                    <a href="#">{{ $commander->name }}</a>
                </td>
                <td>
                    @php($imgPath = "assets/images/icons/commanders/powers/{$commander->slug}.png")

                    @if (file_exists(public_path($imgPath)))
                        <img src="/{{ $imgPath }}" alt="{{ $commander->commander_power_name }} Icon" style="width: 32px;" class="rounded mr-1">
                    @endif

                    {{ $commander->commander_power_name }} ({{ $commander->commander_power_cost }})
                </td>
                <td class="text-center">
                    {{ ucfirst($commander->rarity) }}
                </td>
                <td class="text-center">
                    {{ $commander->unlocked_at_level }}
                </td>
                <td class="text-center">
                    <img src="/assets/images/icons/factions/{{ $commander->faction->slug }}.png" alt="{{ $commander->faction->name }} Icon" style="width: 32px;">
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
