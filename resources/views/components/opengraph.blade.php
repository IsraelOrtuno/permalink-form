{{-- components.opengraph --}}

<permalink-opengraph v-cloak inline-template>
    <div class="permalink-opengraph">
        <!-- OG image -->
        <div class="form-group">
            <label>OpenGraph image</label>
            <input autocomplete="off" type="text" class="form-control" name="permalink[seo][opengraph][image]" v-model="image">
        </div>

        <!-- OG title -->
        <div class="form-group">
            <label>OpenGraph title</label>
            <input autocomplete="off" type="text" class="form-control" name="permalink[seo][opengraph][title]" v-model="title">
        </div>

        <!-- OG description -->
        <div class="form-group">
            <label>OpenGraph description</label>
            <textarea class="form-control" name="permalink[seo][opengraph][description]" rows="3" v-model="description"></textarea>
        </div>
    </div>
</permalink-opengraph>