{{-- permalink --}}

<permalink v-cloak inline-template>
    <div id="permalink">
        @include('permalink::components.tabs')
        <div class="card border-top-0">
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="meta" role="tabpanel" aria-labelledby="meta-tab">
                        @include('permalink::components.meta')
                    </div>
                </div>
            </div>
        </div>
    </div>
</permalink>