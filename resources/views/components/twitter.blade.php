{{-- components.twitter --}}

<permalink-twitter v-cloak inline-template>
    <div class="permalink-twitter">
        <!-- Twitter image -->
        <div class="form-group">
            <label>Twitter image</label>
            <input autocomplete="off" type="text" class="form-control" name="permalink[seo][opengraph][image]" v-model="image">
        </div>

        <!-- Twitter title -->
        <div class="form-group">
            <label>Twitter title</label>
            <input autocomplete="off" type="text" class="form-control" name="permalink[seo][twitter][title]" v-model="title">
        </div>

        <!-- Twitter description -->
        <div class="form-group">
            <label>Twitter description</label>
            <textarea class="form-control" name="permalink[seo][twitter][description]" rows="3" v-model="description"></textarea>
        </div>
    </div>
</permalink-twitter>