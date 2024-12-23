<div class="container mt-5 d-flex justify-content-center align-items-center min-vh-100">
    <div class="form-container p-5 bg-light rounded shadow">
        <h1 class="text-center mb-4">Create Employee</h1>
        
        <form action="{{ route('employee.store') }}" method="post" class="mt-4">

            <div class="d-flex flex-column m-3">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
    
                <div class="mb-3">
                    <label for="CPF" class="form-label">CPF:</label>
                    <input type="text" name="CPF" id="CPF" class="form-control" maxlength="11" required>
                </div>
    
                <div class="mb-3">
                    <label for="date_birth" class="form-label">Date of Birth:</label>
                    <input type="date" name="date_birth" id="date_birth" class="form-control" required>
                </div>
    
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="text" name="phone" id="phone" class="form-control" maxlength="15" required>
                </div>
    
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender:</label>
                    <select name="gender" id="gender" class="form-select" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100 bg-white">Create</button>
        </form>
    </div>
</div>


<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #f8f9fa;
    }

    .form-container {
        background-color: #fff;
        border-radius: 8px;
        padding: 30px;
        width: 100%;
        max-width: 600px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-size: 30px;
        font-weight: bold;
        color: #333;
    }

    .btn-primary {
        width: 100%;
        padding: 12px;
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 5px;
        transition: background-color 0.3s, border-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .form-control, .form-select {
        border-radius: 5px;
        padding: 10px;
        font-size: 16px;
    }

    .form-control:focus, .form-select:focus {
        box-shadow: 0 0 0 0.25rem rgba(38, 143, 255, 0.25);
    }

    .form-label {
        font-weight: 600;
        color: #333;
    }

    .mb-3 {
        margin-bottom: 1.5rem;
    }
</style>
