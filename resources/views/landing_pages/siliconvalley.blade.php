<x-layouts.page.siliconvalley :header="$header" :seo="$seo??['metaTitle'=>'','metaDescription'=>'']" :title="__('Optimal Virtual Employee')">
    <livewire:silicon-valley.hero-section/>
    <livewire:silicon-valley.text-slider/>
    <livewire:silicon-valley.dev-profile/>
    <livewire:silicon-valley.az-block :lp_data="$lp_data ?? []"/>
    <livewire:silicon-valley.ai-block :lp_data="$lp_data ?? []"/>
    <livewire:silicon-valley.query-block :lp_data="$lp_data ?? []"/>
    <livewire:silicon-valley.hiring-process :lp_data="$lp_data ?? []"/>
    <livewire:silicon-valley.tech-team :lp_data="$lp_data ?? []"/>
    <livewire:bacancypage.start-scaling-your-team :lp_data="$lp_data ?? []"/>
    <livewire:bacancypage.our-office-location :lp_data="$lp_data ?? []"/>
</x-layouts.page.siliconvalley>
