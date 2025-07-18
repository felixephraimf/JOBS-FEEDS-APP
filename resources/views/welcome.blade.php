<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
            <tr>
                <td>2</td>
                <td>Sarah</td>
                <td>Wilson</td>
                <td>(555) 567-8901</td>
                <td>sarah.wilson@example.com</td>
                <td>2223334445</td>
                <td>
                    <button class="btn btn-sm btn-outline-primary" onclick="editCustomer(2)">✏️</button>
                    <button class="btn btn-sm btn-outline-secondary" onclick="viewCustomer(2)">👁️</button>
                    <button class="btn btn-sm btn-outline-danger" onclick="deleteCustomer(2)">🗑️</button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Chris</td>
                <td>Brown</td>
                <td>(555) 456-7890</td>
                <td>chris.brown@example.com</td>
                <td>4445556667</td>
                <td>
                    <button class="btn btn-sm btn-outline-primary" onclick="editCustomer(3)">✏️</button>
                    <button class="btn btn-sm btn-outline-secondary" onclick="viewCustomer(3)">👁️</button>
                    <button class="btn btn-sm btn-outline-danger" onclick="deleteCustomer(3)">🗑️</button>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Emily</td>
                <td>Davis</td>
                <td>(555) 345-6789</td>
                <td>emily.davis@example.com</td>
                <td>5556667778</td>
                <td>
                    <button class="btn btn-sm btn-outline-primary" onclick="editCustomer(4)">✏️</button>
                    <button class="btn btn-sm btn-outline-secondary" onclick="viewCustomer(4)">👁️</button>
                    <button class="btn btn-sm btn-outline-danger" onclick="deleteCustomer(4)">🗑️</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Create Customer Modal -->
<div class="modal fade" id="createCustomerModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="createCustomerForm">
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="firstName" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lastName" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" name="phoneNumber" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">BAN</label>
                        <input type="text" class="form-control" name="ban" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveNewCustomer">Save Customer</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Customer Modal -->
<div class="modal fade" id="editCustomerModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="editCustomerForm">
                    <input type="hidden" name="customerId">
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="firstName" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lastName" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" name="phoneNumber" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">BAN</label>
                        <input type="text" class="form-control" name="ban" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="updateCustomer">Update Customer</button>
            </div>
        </div>
    </div>
</div>

<!-- View Customer Modal -->
<div class="modal fade" id="viewCustomerModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Customer Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div id="customerDetails"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
