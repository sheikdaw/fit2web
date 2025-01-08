<div class="row g-4">
    @foreach ($projects as $key => $project)
        @php
            $colSize = match ($key) {
                5 => '5',
                6 => '7',
                7 => '6',
                8 => '6',
                9 => '8',
                10 => '4',
                default => $key < 3 ? '6' : '3',
            };
        @endphp
        <div class="col-xl-{{ $colSize }} col-md-6">
            <div class="project-card style1 wow fadeInUp" data-wow-delay="{{ ($key + 1) * 0.3 }}s">
                <div class="project-thumb">
                    <img src="{{ $key >= 3 ? asset($project->image_3) : asset($project->image_1) }}"
                        alt="{{ $project->project_name }}">
                </div>
                <div class="project-content{{ $key >= 3 ? ' style2' : '' }}">
                    <div class="title-wrap">
                        <div class="subtitle">{{ $project->type }}</div>
                        <h3 class="title">
                            <a href="{{ route('project', ['id' => $project->id]) }}">
                                {{ $project->project_name }}
                            </a>
                        </h3>
                    </div>
                    <a class="arrow-btn" href="{{ route('project', ['id' => $project->id]) }}">
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
