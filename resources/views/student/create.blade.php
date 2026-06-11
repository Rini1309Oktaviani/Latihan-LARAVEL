<x-app>


    <x-slot:title>{{ $title }}</x-slot>
    <form method="POST" action="{{ route('student.store') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name') }}">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="number" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim"
                value="{{ old('nim') }}">
        </div>
        @error('nim')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <a class="btn btn-warning" href="{{ route('student.index') }}" role="button">Cancel</a>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</x-app>
