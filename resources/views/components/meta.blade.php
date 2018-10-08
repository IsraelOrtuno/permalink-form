{{-- components.meta --}}

<permalink-meta v-cloak inline-template>
    <div class="permalink-meta">
        <!-- Slug -->
        <div class="form-group">
            <label>URL and handle</label>
            <div class="form-control permalink-meta__url">
                <span v-text="url"></span>
                <input type="text" class="border-0" name="permalink[slug]" v-model="slug">
            </div>
        </div>

        <!-- Page title -->
        <div class="form-group">
            <label>Page title <span class="small">@{{ title.length }}/60</span></label>
            <input autocomplete="off" type="text" class="form-control" name="permalink[seo][title]" v-model="title">
            <div class="text-danger font-weight-bold small mt-2" v-if="title.length > 60">
                The title should not be longer than 60 characters.
            </div>
        </div>

        <!-- Meta description -->
        <div class="form-group">
            <label>Meta description <span class="small">@{{ description.length }}/300</span></label>
            <textarea class="form-control" name="permalink[seo][description]" rows="3" v-model="description"></textarea>
            <div class="text-danger font-weight-bold small mt-2" v-if="description.length > 300">
                The description should not be longer than 300 characters.
            </div>
        </div>
    </div>
</permalink-meta>