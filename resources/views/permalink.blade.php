{{-- permalink --}}

<permalink :data="{{ json_encode($permalinkData) }}" :store="{{ json_encode($permalink) }}" path="{{ $permalinkPath }}" v-cloak
           inline-template>
    <div class="permalink">
        @include('permalink::components.tabs')
        <div class="card border-top-0">
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="meta" role="tabpanel" aria-labelledby="meta-tab">
                        @include('permalink::components.meta')
                    </div>
                    <div class="tab-pane fade" id="advanced" role="tabpanel" aria-labelledby="advanced-tab">
                        @include('permalink::components.robots')
                    </div>
                </div>
            </div>
        </div>
    </div>
</permalink>
