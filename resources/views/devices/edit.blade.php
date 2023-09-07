<!-- resources/views/services/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Service</title>
</head>
<body>
    <h1>Edit Service</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('devices.update', $service) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="service_code">Service Code:</label>
            <input type="text" name="service_code" id="service_code" value="{{ $service->service_code }}" required>
        </div>
        <div>
            <label for="service_name">Service Name:</label>
            <input type="text" name="service_name" id="service_name" value="{{ $service->service_name }}" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" required>{{ $service->description }}</textarea>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
</body>
</html>