
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Customers</h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createCustomerModal">+ Create Customer</button>
    </div>

    <div class="d-flex justify-content-between mb-3">
        <form class="d-flex w-50" id="searchForm">
            <input type="text" class="form-control me-2" id="searchInput" placeholder="Search anything...">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>
        <select class="form-select w-25 me-2" id="sortSelect">
            <option selected value="newest">Newest to Oldest</option>
            <option value="oldest">Oldest to Newest</option>
        </select>
        <button class="btn btn-dark" id="trashBtn">Trash</button>
    </div>

    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>BAN</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="customerTableBody">
            {{-- Example customers – replace with @foreach($customers as $customer) --}}
            <tr>
                <td>1</td>
                <td>David</td>
                <td>Miller</td>
                <td>(555) 678-9012</td>
                <td>david.miller@example.com</td>
                <td>6667778889</td>
                <td>
                    <button class="btn btn-sm btn-outline-primary" onclick="editCustomer(1)">✏️</button>
                    <button class="btn btn-sm btn-outline-secondary" onclick="viewCustomer(1)">👁️</button>
                    <button class="btn btn-sm btn-outline-danger" onclick="deleteCustomer(1)">🗑️</button>
                </td>
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>


