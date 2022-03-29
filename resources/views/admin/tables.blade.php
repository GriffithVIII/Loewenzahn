<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tables') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section style="padding-top: 60px;">
                    <div class="container">
                        <div class?"row">
                            <div class="col-md-12">
                                {!! $dataTable->table() !!}
                            </div>
                        </div>
                    </div>
                </section>
                {!! $dataTable->scripts() !!}
            </div>
        </div>
    </div>
</x-app-layout>
