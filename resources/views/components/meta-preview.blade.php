{{-- components.meta-preview --}}

<permalink-meta-preview v-cloak inline-template>
    <div class="permalink-meta-preview">
        <div class="permalink-meta-preview__header mb-2">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFgAAAAdCAMAAAAZ3lvZAAABp1BMVEUAAAA0qFM0qFNChfQ0qFNAgvBChfTsUy9ChfT7vAVChfRChfRChfRChfTqQzVChfRChfRChfTqQzVChfRBhfRBhfPqQzVChfTqQzVChfRChfRChfTqQjTqQzVChfRChfTqQzXqQzXqQzXqQzXsQjVChfRChfRChfT7vAVChfTqQzVChfRChfRChfTqQzVChfTqQzVChfTqQzVChfTqQzXqQzXqQzVChfQwqlRChfT8vQPqQzVChfRBhPTqQjX6zAPqQTT7uwX7vAXqQzXqQzX7vAXqQzVChfTqQzVChfRChfRChfT7vAXqQzXqQzT7vAXqQzVChfRChfRChfT7vARChfP7vAVBhfTxPjP7uwT7vAXqQzX7vAVChfT7vAXqQzVChfT7vAVChfT7vAX7vAX9vQJBhfT/vQDqQzVBhPM0qFP7vAPqQjTpQjU0qFP7vAU0qFP7vAVChfQ0qFPqQzX7vAX7vAX7vAX7vAX7vAX7vAU0qFPvQDTqQzT/wQDqQzXyPzT7vAX6vAP7vAXqQzX/6gDpQzT/+AA0qFNChfTqQzX7vAU0qFNk+OFbAAAAiXRSTlMABMZXXAG+BAX894hw2dnMxKuIYjgL/fz45XppK/Lp382smI9IIRD59PHh3dHHvbSnnYF2dGxlXFlUTUIpGAwKCAXo0sm7tqWimo6AfnphW1JMSUQ8MB8UEA/u6tXTysKhl5WPbEY+Mh4cGhkYFe/h1cTAuq+rpaGGdmdjVVRSTjQvJyQhHx0WFNARjvUAAANHSURBVEjHrZRnVxNBFIZfxSWbhJCQEIoEQkgIvTdBugICSu+CgIJ0e+9dZzY/2juzs1lzwA/iPl927zkzz9y5c2egqMwaD9QHWroqcS5+HR5ewBn0NXiYicd/cA7vhacPUldwmhL2J13av4svplKXcIo8RtSFDpJ9XT76K3NKnEOy6KwK5qO+MJwR95K3WE+HehLOiLV68mYk6ZC4l/ohB3/B5XJlJDE0lBHrup4hVlPsjsDZzDwrzy2PfYRi4ObI+vrj7SUoFsf8voYJPeT1LqbFV5tpyo2Iaok8nMVKOTfZ7Jfxgtsw2TGzvcskUT9jWUrsquAmUwDq7Up0B7IVLcBgLSeKOFF7AuCNkeYeiCZGVDHCFjdy4jYnbgHUuSG77xTFwHWyBimJeAHnMWC12jAe7gJf7pB5AWijUU199PXY4hkyNlOFgzT1GxoYmzwlLkOC84IECDn8BNuGMTwk4+eGsYZwnVXBblucy3lQFrpI/FCp6pU4/7KgzUvXEFStXJhsimGUZw8ke27DvVdJOg2SqCVe4bwU2O+sFSWMYY6GZD5pIcayMcp5q4pvcX79p2FUf1Wxm9aQY0wmlfhKgsZFGks50d6voa+Gsa0M8QZjXnEOHSruoOS/k3jJFn/IsXupxBK/o+pxonEKkjFKOR829wtFHOP8BkzinI8OGIb7MySrJN6dZcwHkxZL/IkLKlY0mGjFovywmKcdBOT+S/shoc29x7DoMsk0lfsoKVcXhD3pw+OUzCAEEfMGeUTrJHUNmqZ56b9GB45F64BwXaPWBHpINw3iiBIegR6g1lkWaY3bXRGnOfuyLXhMLpBfwwh/3lZewMOswnRyKm2wM55L306KRf+OvN55Qd61VfNNLBsvmfQzW3xcRNus6Ggf5dbJL/uYTXQZkooCroiDGBg2FNUL8ijUrSusSosRSU+5NmhVtklpN7LCUCRqzTFXrTfI9L5U3dGbzQQlT4T4USr1FsCPZi4o6HAhjTbX5r3crayKSHuwPQKbnpuvpofssDLHG9JAxZhFmv6p1tYE/otu9a1ihflwDC1Uph7FLMY8YTjHBB2bV9w7augJOElAPq+M8MFR9Gzr7U7CYeZaGur8Y104m9/r+lmvMkKejAAAAABJRU5ErkJggg=="
                 height="16px" alt="Google logo"> <span class="font-weight-bold">Snippet</span>
        </div>

        <div class="p-3 bg-light rounded">
            <div class="permalink-meta-preview__title" v-html="title"></div>
            <div class="permalink-meta-preview__link" v-html="url"></div>
            <div class="permalink-meta-preview__description" v-html="description"></div>
        </div>
    </div>
</permalink-meta-preview>