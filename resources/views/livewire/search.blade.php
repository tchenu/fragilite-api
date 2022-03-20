<div>
    <div class="flex">
        <p class="text-2xl mr-4">Rechercher une ville: </p>
        <input wire:model="search" wire:keydown="searchable" class="placeholder-gray-600 underline" type="text" placeholder="Paris, Lyon ..."/>
    </div>

    @if ($visibility)
        <div class="absolute rounded shadow bg-white shadow-lg overflow-hidden peer-checked:flex flex-col mt-1 border border-gray-200" style="width: 500px">
            @foreach ($result as $iris)
                <div class="cursor-pointer group">
                    <a wire:click="chooseCity('{{ addslashes($iris->city) }}')" class="block p-2 border-transparent border-l-4 group-hover:border-blue-600 group-hover:bg-gray-100">{{ $iris->city }}</a>
                </div>
            @endforeach
        </div>
    @endif

    <div class="py-3 px-5 my-4 bg-blue-100 text-blue-900 text-md rounded-md border border-blue-200 flex items-center" role="alert">
        <div class="w-4 mr-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
            </svg>
        </div>
        <span>Un indice élevé indique une fragilité numérique plus grande. Le calcul des indicateurs étant relatif par rapport aux autres communes, le moyenne de chaque indicateur est de 100.</span>
    </div>

    @if ($city)
    <div class="bg-white shadow-lg rounded mt-4">
        <h2 class="py-4 px-6"> Données pour {{ $cityName }}</h2>
        <table class="text-left w-full border-collapse">
            <thead>
                <tr>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Indice</th>
                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Score</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-grey-lighter"">
                    <td class="py-4 px-6 border-b border-grey-light">Score Global</td>
                    <td class="py-4 px-6 border-b border-grey-light">{{ round($scoreGlobal, 2) }}</td>
                </tr>
                <tr class="hover:bg-grey-lighter"">
                    <td class="py-4 px-6 border-b border-grey-light">Acces Information</td>
                    <td class="py-4 px-6 border-b border-grey-light">{{ round($informationAccessScore, 2) }}</td>
                </tr>
                <tr class="hover:bg-grey-lighter"">
                    <td class="py-4 px-6 border-b border-grey-light">Acces Interfaces Numerique</td>
                    <td class="py-4 px-6 border-b border-grey-light">{{ round($accessToDigitalInterfacesScore, 2) }}</td>
                </tr>
                <tr class="hover:bg-grey-lighter"">
                    <td class="py-4 px-6 border-b border-grey-light">Competences Administratives</td>
                    <td class="py-4 px-6 border-b border-grey-light">{{ round($administrativeSkillsScore, 2) }}</td>
                </tr>
                <tr class="hover:bg-grey-lighter"">
                    <td class="py-4 px-6 border-b border-grey-light">Competences Numeriques Scolaires</td>
                    <td class="py-4 px-6 border-b border-grey-light">{{ round($digitalAcademicSkillsScore, 2) }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    @endif
</div>
