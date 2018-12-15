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
        @foreach ($result[$entityGroup] as $item)
            <tr>
                <td>
                    <img src="/assets/images/icons/units/riflemen.png" alt="Riflemen Icon" style="width: 32px;" class="rounded mr-1">
                    <a href="#">{{ $item->name }}</a>
                </td>
                <td class="text-center">Common</td>
                <td class="text-center">Infantry</td>
                <td class="text-center">1</td>
                <td class="text-center">10</td>
                <td class="text-center">
                    <img src="/assets/images/icons/factions/gdi.png" alt="GDI Icon" style="width: 32px;">
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
