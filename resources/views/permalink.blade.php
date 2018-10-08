{{-- permalink --}}

<permalink :data="{{ json_encode($permalinkData) }}" :store="{{ json_encode($permalink) }}" path="{{ $permalinkPath }}" v-cloak inline-template>
    <div class="permalink">
        @include('permalink::components.meta-preview')

        <a class="permalink-toggler" v-show="!privateState.form" @click="show"><i class="fa fa-edit"></i> Edit website SEO</a>

        <div class="permalink-form" v-show="privateState.form">
            <hr class="mt-3 mb-3">
            @include('permalink::components.meta')
            @include('permalink::components.robots')
            @include('permalink::components.opengraph')
            @include('permalink::components.twitter')
        </div>
    </div>
</permalink>
