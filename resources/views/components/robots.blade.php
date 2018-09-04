{{-- components.robots --}}
<permalink-robots v-cloak inline-template>
    <div class="permalink-robots">
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
        </div>

        <div class="form-group">
            <label>Meta robots advanced</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" :checked="noimageindex" @change="addRobotsState('noimageindex', $event.target.checked)">
                <label class="form-check-label font-weight-normal" for="inlineCheckbox1">No Image Index</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" :checked="noarchive" @change="addRobotsState('noarchive', $event.target.checked)">
                <label class="form-check-label font-weight-normal" for="inlineCheckbox2">No Archive</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" :checked="nosnippet" @change="addRobotsState('nosnippet', $event.target.checked)">
                <label class="form-check-label font-weight-normal" for="inlineCheckbox3">No Snippet</label>
            </div>
        </div>

        <div class="form-group">
            <label>Canonical URL</label>
            <input type="text" name="permalink[seo][meta][canonical]" class="form-control form-control-sm">
        </div>
    </div>
</permalink-robots>