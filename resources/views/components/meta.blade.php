{{-- components.meta-preview --}}

<permalink-meta v-cloak inline-template>
    <div class="permalink-meta">
        <!-- Slug -->
        <div class="form-group">
            <label>Slug</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend"><span class="input-group-text" v-text="url"></span></div>
                <input type="text" class="form-control" name="permalink[slug]" v-model="slug">
            </div>
        </div>

        <!-- Page title -->
        <div class="form-group">
            <label>Page title <span class="small">@{{ title.length }}/60</span></label>
            <input autocomplete="off" type="text" class="form-control" name="permalink[seo][meta][title]" v-model="title">
            <div class="text-danger font-weight-bold small mt-2" v-if="title.length > 60">
                The title should not be longer than 60 characters.
            </div>
        </div>

        <!-- Meta description -->
        <div class="form-group">
            <label>Meta description <span class="small">@{{ description.length }}/300</span></label>
            <textarea class="form-control" name="permalink[seo][meta][description]" rows="3" v-model="description"></textarea>
            <div class="text-danger font-weight-bold small mt-2" v-if="description.length > 300">
                The description should not be longer than 300 characters.
            </div>

            {{-- @include('permalink::components.meta-preview') --}}
        </div>
    </div>
</permalink-meta>