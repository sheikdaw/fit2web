@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="mt-5 mb-3 col-12 text-end">
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
                        <div class="mb-3">
                            <label for="image_1" class="form-label">Image 1</label>
                            <input type="file" class="form-control" id="image_1" name="image_1" accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label for="image_2" class="form-label">Image 2</label>
                            <input type="file" class="form-control" id="image_2" name="image_2" accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label for="image_3" class="form-label">Image 3</label>
                            <input type="file" class="form-control" id="image_3" name="image_3" accept="image/*">
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
                <form id="updateProjectForm" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateProjectModalLabel">Update Project</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Hidden ID Field -->
                        <input type="hidden" id="update_project_id" name="id">

                        <!-- Project Name -->
                        <div class="mb-3">
                            <label for="update_project_name" class="form-label">Project Name</label>
                            <input type="text" class="form-control" id="update_project_name" name="project_name"
                                required>
                            <div class="invalid-feedback">Please enter a project name.</div>
                        </div>

                        <!-- Project Type -->
                        <div class="mb-3">
                            <label for="update_type" class="form-label">Type</label>
                            <input type="text" class="form-control" id="update_type" name="type" required>
                            <div class="invalid-feedback">Please enter a project type.</div>
                        </div>

                        <!-- Title 1 -->
                        <div class="mb-3">
                            <label for="update_title_1" class="form-label">Title 1</label>
                            <input type="text" class="form-control" id="update_title_1" name="title_1" required>
                            <div class="invalid-feedback">Please enter title 1.</div>
                        </div>

                        <!-- Title 2 -->
                        <div class="mb-3">
                            <label for="update_title_2" class="form-label">Title 2</label>
                            <input type="text" class="form-control" id="update_title_2" name="title_2" required>
                            <div class="invalid-feedback">Please enter title 2.</div>
                        </div>

                        <!-- Paragraph 1 -->
                        <div class="mb-3">
                            <label for="update_paragraph_1" class="form-label">Paragraph 1</label>
                            <textarea class="form-control" id="update_paragraph_1" name="paragraph_1" required></textarea>
                            <div class="invalid-feedback">Please enter paragraph 1.</div>
                        </div>

                        <!-- Paragraph 2 -->
                        <div class="mb-3">
                            <label for="update_paragraph_2" class="form-label">Paragraph 2</label>
                            <textarea class="form-control" id="update_paragraph_2" name="paragraph_2" required></textarea>
                            <div class="invalid-feedback">Please enter paragraph 2.</div>
                        </div>

                        <!-- Start Date -->
                        <div class="mb-3">
                            <label for="update_start_date" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="update_start_date" name="start_date"
                                required>
                            <div class="invalid-feedback">Please select a start date.</div>
                        </div>

                        <!-- End Date -->
                        <div class="mb-3">
                            <label for="update_end_date" class="form-label">End Date</label>
                            <input type="date" class="form-control" id="update_end_date" name="end_date" required>
                            <div class="invalid-feedback">Please select an end date.</div>
                        </div>

                        <!-- Category -->
                        <div class="mb-3">
                            <label for="update_category" class="form-label">Category</label>
                            <input type="text" class="form-control" id="update_category" name="category" required>
                            <div class="invalid-feedback">Please enter a category.</div>
                        </div>

                        <!-- Customer Name -->
                        <div class="mb-3">
                            <label for="update_customer_name" class="form-label">Customer Name</label>
                            <input type="text" class="form-control" id="update_customer_name" name="customer_name"
                                required>
                            <div class="invalid-feedback">Please enter a customer name.</div>
                        </div>

                        <!-- Advantages -->
                        <div class="mb-3">
                            <label for="update_advantages" class="form-label">Advantages (JSON Format)</label>
                            <textarea class="form-control" id="update_advantages" name="advantages[]" required></textarea>
                            <div class="invalid-feedback">Please enter advantages in JSON format.</div>
                        </div>

                        <!-- Project Summary -->
                        <div class="mb-3">
                            <label for="update_project_summary" class="form-label">Project Summary</label>
                            <textarea class="form-control" id="update_project_summary" name="project_summary" required></textarea>
                            <div class="invalid-feedback">Please enter a project summary.</div>
                        </div>

                        <!-- Rating -->
                        <div class="mb-3">
                            <label for="update_rating" class="form-label">Rating</label>
                            <input type="number" class="form-control" id="update_rating" name="rating" required>
                            <div class="invalid-feedback">Please enter a rating.</div>
                        </div>

                        <!-- Image 1 -->
                        <div class="mb-3">
                            <label for="update_image_1" class="form-label">Image 1</label>
                            <input type="file" class="form-control" id="update_image_1" name="image_1"
                                accept="image/*">
                        </div>

                        <!-- Image 2 -->
                        <div class="mb-3">
                            <label for="update_image_2" class="form-label">Image 2</label>
                            <input type="file" class="form-control" id="update_image_2" name="image_2"
                                accept="image/*">
                        </div>

                        <!-- Image 3 -->
                        <div class="mb-3">
                            <label for="update_image_3" class="form-label">Image 3</label>
                            <input type="file" class="form-control" id="update_image_3" name="image_3"
                                accept="image/*">
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


    <script>
        $(document).ready(function() {
            const routes = {
                projectStore: "{{ route('admin.store-project') }}",
                projectUpdate: "{{ route('admin.projectUpdate') }}",
                projectDelete: "{{ route('admin.projectDelete', ['id' => 'mm']) }}",
            };

            $("#addProjectForm").on("submit", function(event) {
                event.preventDefault(); // Prevent the default form submission

                alert('hi');
                // Gather form data
                var formData = $(this).serialize();

                // Send AJAX request
                $.ajax({
                    url: routes.projectStore,
                    type: "POST",
                    data: formData,
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    success: function(response) {
                        // Handle success
                        $("#addProjectModal").modal("hide");
                        $("#addProjectForm")[0].reset();
                        showFlashMessage(response.message, "success");
                        showUpdatedSurveyors(response.surveyors);
                    },
                    error: function(xhr) {
                        // Handle error
                        showFlashMessage("Error ", "error");
                        if (xhr.status === 422) {
                            // Validation errors
                            const errors = xhr.responseJSON.errors;
                            for (const key in errors) {
                                const input = $(`#${key}`);
                                input.addClass("is-invalid"); // Add Bootstrap invalid class
                                input.next(".invalid-feedback").text(errors[key][
                                    0
                                ]); // Show error message
                            }
                        } else {
                            alert("An unexpected error occurred. Please try again.");
                        }
                    },
                });
            });
        });
    </script>

@endsection
