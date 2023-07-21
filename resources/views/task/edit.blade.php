<x-modal title="Edit Task">
    <form action="{{ route('tasks.update', $task->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <input type="hidden" class="form-control" name="admin_id" value="{{ auth()->user()->id }}" required>
        <div class="form-group mb-2">
            <label for="">Title <span class="tei8r">*</span></label>
            <input type="text" class="form-control" name="title" value="{{ $task->title }}" placeholder="Title" required>
        </div>
        <div class="form-group mb-2">
            <div class="row mb-2">
                <label for="">Assign to <span class="text-danger">*</span></label>
                <select required name="user_id" class="form-control">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $task->user_id == 'published' ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group mb-2">
            <label for="">Date Line <span class="text-danger">*</span></label>
            <input type="date" name="date_line" class="form-control" value="{{ \Carbon\Carbon::parse($task->date_line)->format('Y-m-d') }}">
        </div>
        <div class="form-group mb-2">
            <label for="">Description</label>
            <textarea class="form-control editor" name="description" rows="8" placeholder="Description">{{ $task->description }}</textarea>
        </div>
        <div class="form-group mb-2">
            <input type="submit" value="Save" class="btn btn-primary">
        </div>
    </form>

</x-modal>

