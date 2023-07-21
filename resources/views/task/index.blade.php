 <x-app-layout title="Task">
    <div>
        <div class="card">
            <div class="card-header">
                Task
            </div>
            <div class="card-body">
                <x-datatable :dataTable="$dataTable"></x-datatable>
            </div>
        </div>
    </div>

    @push('js')
    <script>
        function create() {
            $.ajax({
                url: "{{ route('tasks.create') }}",
                success: function(html) {
                    $('#modal').html(html).modal('show');
                }
            });
        }

        $('body').on('click', '.edit-btn', function(e) {
            e.preventDefault();
            $.ajax({
                url: $(this).attr('href'),
                success: function(html) {
                    $('#modal').html(html).modal('show');
                }
            });
        });
    </script>
    @endpush
</x-app-layout>
