<x-modal title="Create Task">
    <form action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" class="form-control" name="admin_id" value="{{ auth()->user()->id }}" required>
        <div class="form-group mb-2">
            <label for="">Title <span class="tei8r">*</span></label>
            <input type="text" class="form-control" name="title" placeholder="Title" required>
        </div>
        <div class="form-group mb-2">
            <div class="row mb-2">
                <label for="">Assign to <span class="text-danger">*</span></label>
                <select required name="user_id" class="form-control">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group mb-2">
            <label for="">Date Line <span class="text-danger">*</span></label>
            <input type="date" class="form-control" name="date_line" required>
        </div>
        <div class="form-group mb-2">
            <label for="">Description</label>
            <textarea class="form-control editor" name="description" rows="8" placeholder="Description"></textarea>
        </div>
        <div class="form-group mb-2">
            <input type="submit" value="Save" class="btn btn-primary">
        </div>
    </form>

</x-modal>

