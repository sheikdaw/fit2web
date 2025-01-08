@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="mt-5 mb-3 col-12 text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBlogModal">
                    Add Blog
                </button>
            </div>
            @if ($blogs->isEmpty())
                <div class="col-12">
                    <div class="text-center alert alert-warning" role="alert">
                        No blogs found.
                    </div>
                </div>
            @else
                <div class="row show-blogs">
                    @foreach ($blogs as $blog)
                        <div class="col-md-4">
                            <div class="mb-4 shadow-sm card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $blog->blog_name }}</h5>
                                    <p class="card-text">
                                        <strong>Type:</strong> {{ $blog->type }} <br>
                                        <strong>Date:</strong> {{ $blog->date }} <br>
                                        <strong>Category:</strong> {{ $blog->category }} <br>
                                        <strong>Customer:</strong> {{ $blog->customer_name }} <br>
                                        <strong>Rating:</strong> {{ $blog->rating }} <br>
                                        @if (!empty($blog->advantages) && is_array($blog->advantages))
                                            <ul>
                                                @foreach ($blog->advantages as $advantage)
                                                    <li>{{ $advantage }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </p>
                                    <button class="btn btn-primary editBlog" data-id="{{ $blog->id }}"
                                        data-blog_name="{{ $blog->blog_name }}" data-type="{{ $blog->type }}"
                                        data-title_1="{{ $blog->title_1 }}" data-title_2="{{ $blog->title_2 }}"
                                        data-paragraph_1="{{ $blog->paragraph_1 }}"
                                        data-paragraph_2="{{ $blog->paragraph_2 }}"
                                        data-paragraph_3="{{ $blog->paragraph_3 }}" data-date="{{ $blog->date }}"
                                        data-category="{{ $blog->category }}"
                                        data-customer_name="{{ $blog->customer_name }}"
                                        data-advantages="{{ json_encode($blog->advantages) }}"
                                        data-project_summary="{{ $blog->project_summary }}"
                                        data-rating="{{ $blog->rating }}" data-ordered_by="{{ $blog->ordered_by }}"
                                        data-testimonial_phara="{{ $blog->testimonial_phara }}"
                                        data-testimonial_name="{{ $blog->testimonial_name }}"
                                        data-testimonial_by="{{ $blog->testimonial_by }}" data-tags="{{ $blog->tags }}"
                                        data-image_1="{{ $blog->image_1 }}" data-image_2="{{ $blog->image_2 }}"
                                        data-image_3="{{ $blog->image_3 }}" data-image_4="{{ $blog->image_4 }}">
                                        Update
                                    </button>

                                    <button class="btn btn-danger delete-blog"
                                        data-id="{{ $blog->id }}">Delete</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    <!-- Modal for Adding Blog -->
    <div class="modal fade" id="addBlogModal" tabindex="-1" aria-labelledby="addBlogModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="addBlogForm" novalidate>
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addBlogModalLabel">Add New Blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="blog_name" class="form-label">Blog Name</label>
                            <input type="text" class="form-control" id="blog_name" name="blog_name" required>
                            <div class="invalid-feedback">Please enter a blog name.</div>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control" id="type" name="type" required>
                            <div class="invalid-feedback">Please enter a blog type.</div>
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
                            <label for="paragraph_3" class="form-label">Paragraph 3</label>
                            <textarea class="form-control" id="paragraph_3" name="paragraph_3" required></textarea>
                            <div class="invalid-feedback">Please enter paragraph 3.</div>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                            <div class="invalid-feedback">Please select a date.</div>
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
                            <label for="created_by" class="form-label">Created By</label>
                            <input type="text" class="form-control" id="created_by" name="created_by" required>
                            <div class="invalid-feedback">Please enter the creator's name.</div>
                        </div>
                        <div class="mb-3">
                            <label for="testimonial_phara" class="form-label">Testimonial Paragraph</label>
                            <textarea class="form-control" id="testimonial_phara" name="testimonial_phara" required></textarea>
                            <div class="invalid-feedback">Please enter a testimonial paragraph.</div>
                        </div>
                        <div class="mb-3">
                            <label for="testimonial_name" class="form-label">Testimonial Name</label>
                            <input type="text" class="form-control" id="testimonial_name" name="testimonial_name"
                                required>
                            <div class="invalid-feedback">Please enter a testimonial name.</div>
                        </div>
                        <div class="mb-3">
                            <label for="testimonial_by" class="form-label">Testimonial By</label>
                            <input type="text" class="form-control" id="testimonial_by" name="testimonial_by"
                                required>
                            <div class="invalid-feedback">Please enter the name of the person giving the testimonial.</div>
                        </div>
                        <div class="mb-3">
                            <label for="tags" class="form-label">Tags</label>
                            <input type="text" class="form-control" id="tags" name="tags" required>
                            <div class="invalid-feedback">Please enter tags.</div>
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
                            <label for="ordered_by" class="form-label">Ordered By</label>
                            <input type="text" class="form-control" id="ordered_by" name="ordered_by" required>
                            <div class="invalid-feedback">Please enter who ordered this blog.</div>
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
                        <div class="mb-3">
                            <label for="image_4" class="form-label">Image 4</label>
                            <input type="file" class="form-control" id="image_4" name="image_4" accept="image/*">
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

    <!-- Modal to Update Blog -->
    <div class="modal fade" id="updateBlogModal" tabindex="-1" aria-labelledby="updateBlogModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="updateBlogForm" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateBlogModalLabel">Update Blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Hidden ID Field -->
                        <input type="hidden" id="update_blog_id" name="id">

                        <!-- Blog Name -->
                        <div class="mb-3">
                            <label for="update_blog_name" class="form-label">Blog Name</label>
                            <input type="text" class="form-control" id="update_blog_name" name="blog_name" required>
                            <div class="invalid-feedback">Please enter a blog name.</div>
                        </div>

                        <!-- Blog Type -->
                        <div class="mb-3">
                            <label for="update_type" class="form-label">Type</label>
                            <input type="text" class="form-control" id="update_type" name="type" required>
                            <div class="invalid-feedback">Please enter a blog type.</div>
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

                        <!-- Paragraph 3 -->
                        <div class="mb-3">
                            <label for="update_paragraph_3" class="form-label">Paragraph 3</label>
                            <textarea class="form-control" id="update_paragraph_3" name="paragraph_3" required></textarea>
                            <div class="invalid-feedback">Please enter paragraph 3.</div>
                        </div>

                        <!-- Date -->
                        <div class="mb-3">
                            <label for="update_date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="update_date" name="date" required>
                            <div class="invalid-feedback">Please select a date.</div>
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

                        <!-- Advantages (JSON Format) -->
                        <div class="mb-3">
                            <label for="update_advantages" class="form-label">Advantages (JSON Format)</label>
                            <textarea class="form-control" id="update_advantages" name="advantages[]" required></textarea>
                            <div class="invalid-feedback">Please enter advantages in JSON format.</div>
                        </div>

                        <!-- Created By -->
                        <div class="mb-3">
                            <label for="update_created_by" class="form-label">Created By</label>
                            <input type="text" class="form-control" id="update_created_by" name="created_by"
                                required>
                            <div class="invalid-feedback">Please enter the creator's name.</div>
                        </div>

                        <!-- Testimonial Paragraph -->
                        <div class="mb-3">
                            <label for="update_testimonial_phara" class="form-label">Testimonial Paragraph</label>
                            <textarea class="form-control" id="update_testimonial_phara" name="testimonial_phara" required></textarea>
                            <div class="invalid-feedback">Please enter a testimonial paragraph.</div>
                        </div>

                        <!-- Testimonial Name -->
                        <div class="mb-3">
                            <label for="update_testimonial_name" class="form-label">Testimonial Name</label>
                            <input type="text" class="form-control" id="update_testimonial_name"
                                name="testimonial_name" required>
                            <div class="invalid-feedback">Please enter a testimonial name.</div>
                        </div>

                        <!-- Testimonial By -->
                        <div class="mb-3">
                            <label for="update_testimonial_by" class="form-label">Testimonial By</label>
                            <input type="text" class="form-control" id="update_testimonial_by" name="testimonial_by"
                                required>
                            <div class="invalid-feedback">Please enter the name of the person giving the testimonial.</div>
                        </div>

                        <!-- Tags -->
                        <div class="mb-3">
                            <label for="update_tags" class="form-label">Tags</label>
                            <input type="text" class="form-control" id="update_tags" name="tags" required>
                            <div class="invalid-feedback">Please enter tags.</div>
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

                        <!-- Ordered By -->
                        <div class="mb-3">
                            <label for="update_ordered_by" class="form-label">Ordered By</label>
                            <input type="text" class="form-control" id="update_ordered_by" name="ordered_by"
                                required>
                            <div class="invalid-feedback">Please enter the orderer's name.</div>
                        </div>

                        <!-- Image Fields -->
                        <div class="mb-3">
                            <label for="update_image_1" class="form-label">Image 1</label>
                            <input type="file" class="form-control" id="update_image_1" name="image_1"
                                accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label for="update_image_2" class="form-label">Image 2</label>
                            <input type="file" class="form-control" id="update_image_2" name="image_2"
                                accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label for="update_image_3" class="form-label">Image 3</label>
                            <input type="file" class="form-control" id="update_image_3" name="image_3"
                                accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label for="update_image_4" class="form-label">Image 4</label>
                            <input type="file" class="form-control" id="update_image_4" name="image_4"
                                accept="image/*">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            const routes = {
                blogStore: "{{ route('admin.store-blog') }}",
                blogUpdate: "{{ route('admin.blogUpdate') }}",
                blogDelete: "{{ route('admin.blog.destroy', 'ID_PLACEHOLDER') }}",
            };

            // Add Blog
            $("#addBlogForm").on("submit", function(event) {
                event.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    url: routes.blogStore,
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    success: function(response) {
                        $("#addBlogModal").modal("hide");
                        $("#addBlogForm")[0].reset();
                        showFlashMessage(response.message, "success");
                        // location.reload(); // Reload to reflect the updated blog list
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            const errors = xhr.responseJSON.errors;
                            for (const key in errors) {
                                const input = $(`#${key}`);
                                input.addClass("is-invalid");
                                input.next(".invalid-feedback").text(errors[key][0]);
                            }
                        } else {
                            alert("An unexpected error occurred. Please try again.");
                        }
                    },
                });
            });

            // Edit Blog (populate modal fields with existing data)
            $(".editBlog").on("click", function() {
                const data = $(this).data(); // Get the data attributes from the clicked element

                // Set form field values using data attributes
                $("#update_blog_id").val(data.id);
                $("#update_blog_name").val(data.blog_name);
                $("#update_type").val(data.type);
                $("#update_title_1").val(data.title_1);
                $("#update_title_2").val(data.title_2);
                $("#update_paragraph_1").val(data.paragraph_1);
                $("#update_paragraph_2").val(data.paragraph_2);
                $("#update_paragraph_3").val(data.paragraph_3);
                $("#update_date").val(data.date);
                $("#update_category").val(data.category);
                $("#update_customer_name").val(data.customer_name);
                $("#update_advantages").val(JSON.stringify(data
                .advantages)); // Convert JSON to string format
                $("#update_project_summary").val(data.project_summary);
                $("#update_rating").val(data.rating);
                $("#update_ordered_by").val(data.ordered_by);
                $("#update_testimonial_phara").val(data.testimonial_phara);
                $("#update_testimonial_name").val(data.testimonial_name);
                $("#update_testimonial_by").val(data.testimonial_by);
                $("#update_tags").val(data.tags);

                // Set image paths if they exist
                if (data.image_1) {
                    $("#update_image_1").attr("data-image-path", data
                    .image_1); // Optionally store image path in a custom attribute
                }
                if (data.image_2) {
                    $("#update_image_2").attr("data-image-path", data.image_2);
                }
                if (data.image_3) {
                    $("#update_image_3").attr("data-image-path", data.image_3);
                }
                if (data.image_4) {
                    $("#update_image_4").attr("data-image-path", data.image_4);
                }

                // Show the modal
                $("#updateBlogModal").modal("show");
            });



            // Update Blog
            $("#updateBlogForm").on("submit", function(event) {
                event.preventDefault();

                const formData = new FormData(this);

                $.ajax({
                    url: routes.blogUpdate, // Replace with your route name or URL
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    success: function(response) {
                        $("#updateBlogModal").modal("hide");
                        showFlashMessage(response.message, "success");
                        // location.reload(); // Reload the page to reflect changes
                    },
                    error: function(xhr) {
                        console.error("Error Response:", xhr);

                        if (xhr.status === 422) {
                            const errors = xhr.responseJSON.errors;
                            for (const key in errors) {
                                const input = $(`#update_${key}`);
                                input.addClass("is-invalid");
                                input.next(".invalid-feedback").text(errors[key][0]);
                            }
                        } else {
                            alert("An unexpected error occurred. Please try again.");
                        }
                    },
                });
            });

            // Delete Blog
            $(".delete-blog").on("click", function() {
                const blogId = $(this).data("id");

                if (confirm("Are you sure you want to delete this blog?")) {
                    $.ajax({
                        url: routes.blogDelete.replace("ID_PLACEHOLDER", blogId),
                        type: "DELETE",
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                        },
                        success: function(response) {
                            alert(response.message);
                            location.reload(); // Reload the page to reflect the deletion
                        },
                        error: function(xhr, status, error) {
                            if (xhr.status === 419) {
                                alert(
                                    "CSRF token mismatch. Please refresh the page and try again."
                                );
                            } else {
                                alert("Failed to delete the blog. Please try again.");
                            }
                        },
                    });
                }
            });

            // Helper: Show Flash Message
            function showFlashMessage(message, type) {
                const flashMessage = `<div class="alert alert-${type} alert-dismissible fade show" role="alert">
                    ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>`;
                $("body").prepend(flashMessage);

                // Auto-hide the message after 3 seconds
                setTimeout(() => {
                    $(".alert").alert("close");
                }, 3000);
            }
        });
    </script>


@endsection
