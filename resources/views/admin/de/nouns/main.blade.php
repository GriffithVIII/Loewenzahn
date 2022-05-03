<x-app-layout>
    @include('admin.de.header')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section style="padding-top: 20px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                {!! $dataTable->table() !!}
                            </div>
                        </div>
                    </div>
                </section>
                <script>
                    $(function() {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': '{{csrf_token()}}'
                            }
                        });
                    
                        var editor = new $.fn.dataTable.Editor({
                            ajax: "/de/nouns",
                            table: "#de/nouns",
                            display: "bootstrap",
                            fields: [
                                {label: "Name:", name: "name"},
                                {label: "Email:", name: "email"},
                                {label: "Password:", name: "password", type: "password"}
                            ]
                        });
                    
                        $('#de/nouns').on('click', 'tbody td:not(:first-child)', function (e) {
                            editor.inline(this);
                        });
                    
                        //{{$dataTable->generateScripts()}}
                    })
                </script>
                {!! $dataTable->scripts() !!}
            </div>
        </div>
    </div>
@include('admin.de.nouns._scripts')
</x-app-layout>
