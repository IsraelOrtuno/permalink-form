{{-- components.robots --}}
<permalink-robots v-cloak inline-template>
    <div class="permalink-robots">
        <input type="hidden" name="permalink[seo][meta][robots]" v-model="robots">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Allow search engines to show this page in search results?</label>
                    <select v-model="index" class="form-control form-control-sm">
                        <option value="default">Use default</option>
                        <option value="index">Yes (index)</option>
                        <option value="noindex">No (noindex)</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Should search engines follow links on this page?</label>
                    <select v-model="follow" class="form-control form-control-sm">
                        <option value="default">Use default</option>
                        <option value="follow">Yes (follow)</option>
                        <option value="nofollow">No (nofollow)</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Meta robots advanced</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="noimageindex" :checked="noimageindex" @change="addRobotsState('noimageindex', $event.target.checked)">
                        <label class="form-check-label font-weight-normal" for="noimageindex">No Image Index</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="noarchive" :checked="noarchive" @change="addRobotsState('noarchive', $event.target.checked)">
                        <label class="form-check-label font-weight-normal" for="noarchive">No Archive</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="nosnippet" :checked="nosnippet" @change="addRobotsState('nosnippet', $event.target.checked)">
                        <label class="form-check-label font-weight-normal" for="nosnippet">No Snippet</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Canonical URL</label>
                    <input type="text" name="permalink[seo][meta][canonical]" v-model="canonical" class="form-control form-control-sm">
                </div>
            </div>
        </div>
    </div>
</permalink-robots>