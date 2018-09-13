{{-- permalink --}}

<permalink :data="{{ json_encode($permalinkData) }}" :store="{{ json_encode($permalink) }}" path="{{ $permalinkPath }}" v-cloak inline-template>
    <div class="permalink">
        @include('permalink::components.meta')
        @include('permalink::components.robots')
    </div>
</permalink>
