{{-- components.advanced --}}
<permalink-advanced v-cloak inline-template>
    <div class="permalink-advanced">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Allow search engines to show this page in search results?</label>
                    <select name="permalink[seo][advanced][robots][index]" id="" class="form-control form-control-sm">
                        <option value="-1">Use default</option>
                        <option value="1">Yes (index)</option>
                        <option value="0">No (no index)</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Should search engines follow links on this page?</label>
                    <select name="permalink[seo][advanced][robots][follow]" class="form-control form-control-sm">
                        <option value="1">Follow</option>
                        <option value="0">No follow</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Meta robots advanced</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="permalink[seo][advanced][robots][noimageindex]" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label font-weight-normal" for="inlineCheckbox1">No Image Index</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="permalink[seo][advanced][robots][noarchive]" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label font-weight-normal" for="inlineCheckbox2">No Archive</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="permalink[seo][advanced][robots][nosnippet]" type="checkbox" id="inlineCheckbox3" value="option3">
                <label class="form-check-label font-weight-normal" for="inlineCheckbox3">No Snippet</label>
            </div>

        </div>

        <div class="form-group">
            <label>Canonical URL</label>
            <input type="text" name="permalink[seo][advanced][canonical]" class="form-control form-control-sm">
        </div>
    </div>
</permalink-advanced>