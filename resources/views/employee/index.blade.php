<section>
    <h1>Employees</h1>

    <div class="action-buttons">
        <a href="{{ route('employee.create') }}" class="btn btn-primary">Create Employee</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>CPF</th>
                <th>Date of Birth</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->cpf }}</td>
                    <td>{{ $employee->date_birth }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>{{ $employee->gender }}</td>
                    <td>
                        <button class="btn btn-primary">
                            <a href="{{ route('employee.edit', $employee->id) }}" class="text-white" style="text-decoration: none;">Edit</a>
                        </button>

                        <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

<style>
    section {
        margin-top: 20px;
    }

    h1 {
        font-size: 24px;
        color: #333;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .action-buttons {
        margin-bottom: 20px;
    }

    .action-buttons .btn {
        margin-right: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        border-radius: 8px;
        margin-top: 20px;
    }

    th {
        background-color: #4CAF50;
        color: white;
        padding: 12px 15px;
        text-align: left;
        font-size: 16px;
        font-weight: bold;
    }

    td {
        padding: 10px 15px;
        border-bottom: 1px solid #ddd;
        text-align: left;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    th, td {
        border: 1px solid #ddd;
    }

    .btn-primary, .btn-danger {
        padding: 8px 16px;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }

    a {
        color: white;
        text-decoration: none;
    }

    .btn-primary a:hover {
        color: white;
    }
</style>
