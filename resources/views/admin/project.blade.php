@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="mb-3 col-12 text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProjectModal">
                    Add Project
                </button>
            </div>
            @if ($projects->isEmpty())
                <div class="col-12">
                    <div class="text-center alert alert-warning" role="alert">
                        No projects found.
                    </div>
                </div>
            @else
                <div class="row show-projects">
                    @foreach ($projects as $project)
                        <div class="col-md-4">
                            <div class="mb-4 shadow-sm card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $project->project_name }}</h5>
                                    <p class="card-text">
                                        <strong>Type:</strong> {{ $project->type }} <br>
                                        <strong>Start Date:</strong> {{ $project->start_date }} <br>
                                        <strong>End Date:</strong> {{ $project->end_date }} <br>
                                        <strong>Category:</strong> {{ $project->category }} <br>
                                        <strong>Customer:</strong> {{ $project->customer_name }} <br>
                                        <strong>Rating:</strong> {{ $project->rating }} <br>
                                        @if (!empty($project->advantages) && is_array($project->advantages))
                                            <ul>
                                                @foreach ($project->advantages as $advantage)
                                                    <li>{{ $advantage }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </p>
                                    <button class="btn btn-primary editProject" data-id="{{ $project->id }}"
                                        data-project_name="{{ $project->project_name }}" data-type="{{ $project->type }}"
                                        data-title_1="{{ $project->title_1 }}" data-title_2="{{ $project->title_2 }}"
                                        data-paragraph_1="{{ $project->paragraph_1 }}"
                                        data-paragraph_2="{{ $project->paragraph_2 }}"
                                        data-start_date="{{ $project->start_date }}"
                                        data-end_date="{{ $project->end_date }}" data-category="{{ $project->category }}"
                                        data-customer_name="{{ $project->customer_name }}"
                                        data-advantages="{{ json_encode($project->advantages) }}"
                                        data-project_summary="{{ $project->project_summary }}"
                                        data-rating="{{ $project->rating }}" data-ordered_by="{{ $project->ordered_by }}">
                                        Update
                                    </button>
                                    <button class="btn btn-danger delete-project"
                                        data-id="{{ $project->id }}">Delete</button>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            @endif
        </div>
    </div>

    <!-- Modal for Adding Project -->
    <div class="modal fade" id="addProjectModal" tabindex="-1" aria-labelledby="addProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="addProjectForm" novalidate>
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addProjectModalLabel">Add New Project</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="project_name" class="form-label">Project Name</label>
                            <input type="text" class="form-control" id="project_name" name="project_name" required>
                            <div class="invalid-feedback">Please enter a project name.</div>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control" id="type" name="type" required>
                            <div class="invalid-feedback">Please enter a project type.</div>
                        </div>
                        <div class="mb-3">
                            <label for="title_1" class="form-label">Title 1</label>
                            <input type="text" class="form-control" id="title_1" name="title_1" required>
                            <div class="invalid-feedback">Please enter title 1.</div>
                        </div>
                        <div class="mb-3">
                            <label for="title_2" class="form-label">Title 2</label>
                            <input type="text" class="form-control" id="title_2" name="title_2" required>
                            <div class="invalid-feedback">Please enter title 2.</div>
                        </div>
                        <div class="mb-3">
                            <label for="paragraph_1" class="form-label">Paragraph 1</label>
                            <textarea class="form-control" id="paragraph_1" name="paragraph_1" required></textarea>
                            <div class="invalid-feedback">Please enter paragraph 1.</div>
                        </div>
                        <div class="mb-3">
                            <label for="paragraph_2" class="form-label">Paragraph 2</label>
                            <textarea class="form-control" id="paragraph_2" name="paragraph_2" required></textarea>
                            <div class="invalid-feedback">Please enter paragraph 2.</div>
                        </div>
                        <div class="mb-3">
                            <label for="start_date" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" required>
                            <div class="invalid-feedback">Please select a start date.</div>
                        </div>
                        <div class="mb-3">
                            <label for="end_date" class="form-label">End Date</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" required>
                            <div class="invalid-feedback">Please select an end date.</div>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" class="form-control" id="category" name="category" required>
                            <div class="invalid-feedback">Please enter a category.</div>
                        </div>
                        <div class="mb-3">
                            <label for="customer_name" class="form-label">Customer Name</label>
                            <input type="text" class="form-control" id="customer_name" name="customer_name" required>
                            <div class="invalid-feedback">Please enter a customer name.</div>
                        </div>
                        <div class="mb-3">
                            <label for="advantages" class="form-label">Advantages (JSON Format)</label>
                            <textarea class="form-control" id="advantages" name="advantages[]" required></textarea>
                            <div class="invalid-feedback">Please enter advantages in JSON format.</div>
                        </div>
                        <div class="mb-3">
                            <label for="project_summary" class="form-label">Project Summary</label>
                            <textarea class="form-control" id="project_summary" name="project_summary" required></textarea>
                            <div class="invalid-feedback">Please enter a project summary.</div>
                        </div>
                        <div class="mb-3">
                            <label for="rating" class="form-label">Rating</label>
                            <input type="number" class="form-control" id="rating" name="rating" required>
                            <div class="invalid-feedback">Please enter a rating.</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Model for updating project details --}}
    <div class="modal fade" id="updateProjectModal" tabindex="-1" aria-labelledby="updateProjectModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="updateProjectForm" novalidate>
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateProjectModalLabel">Update Project</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="update_project_id" name="id">
                        <div class="mb-3">
                            <label for="update_project_name" class="form-label">Project Name</label>
                            <input type="text" class="form-control" id="update_project_name" name="project_name"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="update_type" class="form-label">Type</label>
                            <input type="text" class="form-control" id="update_type" name="type" required>
                        </div>
                        <div class="mb-3">
                            <label for="update_title_1" class="form-label">Title 1</label>
                            <input type="text" class="form-control" id="update_title_1" name="title_1" required>
                        </div>
                        <!-- Add the rest of the fields for update form as required -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const routes = {
            projectStore: "{{ route('admin.store-project') }}",
            projectUpdate: "{{ route('admin.projectUpdate') }}",
            projectDelete: "{{ route('admin.projectDelete', ['id' => 'mm']) }}",
        };
        $(document).ready(function() {
            // CSRF Token setup for AJAX
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Add Project
            $('#addProjectForm').on('submit', function(e) {
                e.preventDefault();
                let formData = $(this).serialize();

                $.ajax({
                    url: routes.projectStore,
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            alert('Project added successfully!');
                            location.reload(); // Reload the page
                        } else {
                            alert('Error: ' + response.message);
                        }
                    },
                    error: function(xhr) {
                        alert('Something went wrong.');
                    }
                });
            });

            // Edit/Update Project
            $('.editProject').on('click', function() {
                // Populate update modal with data
                $('#update_project_id').val($(this).data('id'));
                $('#update_project_name').val($(this).data('project_name'));
                $('#update_type').val($(this).data('type'));
                $('#update_title_1').val($(this).data('title_1'));
                $('#update_title_2').val($(this).data('title_2'));
                $('#update_paragraph_1').val($(this).data('paragraph_1'));
                $('#update_paragraph_2').val($(this).data('paragraph_2'));
                $('#update_start_date').val($(this).data('start_date'));
                $('#update_end_date').val($(this).data('end_date'));
                $('#update_category').val($(this).data('category'));
                $('#update_customer_name').val($(this).data('customer_name'));
                $('#update_advantages').val($(this).data('advantages'));
                $('#update_project_summary').val($(this).data('project_summary'));
                $('#update_rating').val($(this).data('rating'));

                // Show the modal
                $('#updateProjectModal').modal('show');
            });

            $('#updateProjectForm').on('submit', function(e) {
                e.preventDefault();
                let formData = $(this).serialize();

                $.ajax({
                    url: routes.projectUpdate,
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            alert('Project updated successfully!');
                            location.reload(); // Reload the page
                        } else {
                            alert('Error: ' + response.message);
                        }
                    },
                    error: function(xhr) {
                        alert('Something went wrong.');
                    }
                });
            });

            // Delete Project
            $('.delete-project').on('click', function() {
                if (confirm('Are you sure you want to delete this project?')) {
                    let projectId = $(this).data('id');

                    $.ajax({
                        url: routes.projectDelete.replace('mm', projectId),
                        type: 'DELETE',
                        success: function(response) {
                            if (response.success) {
                                alert('Project deleted successfully!');
                                location.reload(); // Reload the page
                            } else {
                                alert('Error: ' + response.message);
                            }
                        },
                        error: function(xhr) {
                            alert('Something went wrong.');
                        }
                    });
                }
            });
        });
    </script>

@endsection
