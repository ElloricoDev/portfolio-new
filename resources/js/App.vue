<template>
    <div id="top" class="relative overflow-hidden">
        <div class="pointer-events-none absolute inset-0">
            <div
                class="absolute -top-24 left-10 h-64 w-64 rounded-full bg-[rgba(56,189,248,0.18)] blur-[120px]"
            ></div>
            <div
                class="absolute top-40 right-0 h-72 w-72 rounded-full bg-[rgba(249,115,22,0.18)] blur-[140px]"
            ></div>
            <div
                class="absolute bottom-10 left-1/3 h-64 w-64 rounded-full bg-[rgba(250,204,21,0.12)] blur-[140px]"
            ></div>
        </div>
        <header
            class="fixed left-0 right-0 top-0 z-30 border-b border-slate-800/60 bg-slate-950/80 backdrop-blur"
        >
            <div
                class="mx-auto flex max-w-6xl items-center justify-between px-6 py-5"
            >
                <div class="flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-900/70 ring-soft"
                    >
                        <span class="font-mono text-sm text-slate-200">{{
                            initials
                        }}</span>
                    </div>
                    <div>
                        <p class="text-sm text-slate-400">Portfolio</p>
                        <p class="text-lg font-semibold text-slate-100">
                            {{ portfolio.name }}
                        </p>
                    </div>
                </div>
                <nav
                    class="hidden items-center gap-6 text-sm text-slate-300 md:flex"
                >
                    <a href="#about" class="transition hover:text-white"
                        >About</a
                    >
                    <a href="#skills" class="transition hover:text-white"
                        >Skills</a
                    >
                    <a href="#tools" class="transition hover:text-white"
                        >Tools</a
                    >
                    <a href="#experience" class="transition hover:text-white"
                        >Experience</a
                    >
                    <a href="#projects" class="transition hover:text-white"
                        >Projects</a
                    >
                    <a href="#availability" class="transition hover:text-white"
                        >Availability</a
                    >
                    <a href="#contact" class="transition hover:text-white"
                        >Contact</a
                    >
                </nav>
                <a
                    :href="portfolio.cta.resumeUrl"
                    download
                    class="hidden rounded-full bg-white px-4 py-2 text-sm font-semibold text-slate-900 transition hover:-translate-y-0.5 hover:shadow-lg md:inline-flex"
                >
                    {{ portfolio.cta.resumeLabel }}
                </a>
            </div>
        </header>
        <main class="relative z-10 pb-20 pt-24 md:pb-0">
            <section class="section-pad">
                <div
                    class="mx-auto grid max-w-6xl gap-10 px-6 lg:grid-cols-[1.2fr_0.8fr]"
                >
                    <div>
                        <p
                            class="text-sm uppercase tracking-[0.3em] text-slate-400"
                        >
                            Open to roles
                        </p>
                        <h1
                            class="mt-4 text-4xl font-semibold leading-tight text-slate-100 md:text-5xl"
                        >
                            {{ portfolio.role }}
                            <span class="text-gradient">{{
                                portfolio.name
                            }}</span>
                        </h1>
                        <p
                            class="mt-4 max-w-xl text-base text-slate-300 md:text-lg"
                        >
                            {{ portfolio.pitch }}
                        </p>
                        <div class="mt-6 flex flex-wrap items-center gap-4">
                            <a
                                :href="portfolio.cta.contactUrl"
                                class="rounded-full bg-accent px-6 py-3 text-sm font-semibold text-slate-900 transition hover:-translate-y-0.5 hover:shadow-lg"
                            >
                                {{ portfolio.cta.contactLabel }}
                            </a>
                            <a
                                :href="portfolio.cta.resumeUrl"
                                download
                                class="rounded-full border border-slate-600 px-6 py-3 text-sm font-semibold text-slate-100 transition hover:border-white"
                            >
                                {{ portfolio.cta.resumeLabel }}
                            </a>
                        </div>
                        <div
                            class="mt-6 flex items-center gap-3 text-sm text-slate-400"
                        >
                            <span class="font-mono">Based in</span>
                            <span class="text-slate-200">{{
                                portfolio.location
                            }}</span>
                        </div>
                    </div>
                    <div class="glass card-shadow rounded-3xl p-6">
                        <div class="flex items-center justify-between">
                            <p class="text-sm text-slate-400">Highlights</p>
                            <span
                                class="rounded-full bg-slate-800 px-3 py-1 text-xs text-slate-300"
                                >2026</span
                            >
                        </div>
                        <div class="mt-6 space-y-4">
                            <div
                                v-for="item in portfolio.highlights"
                                :key="item.label"
                                class="rounded-2xl border border-slate-700/60 bg-slate-900/50 p-4"
                            >
                                <p
                                    class="text-xs uppercase tracking-[0.2em] text-slate-500"
                                >
                                    {{ item.label }}
                                </p>
                                <p
                                    class="mt-2 text-lg font-semibold text-slate-100"
                                >
                                    {{ item.value }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="about" class="section-pad">
                <div
                    class="mx-auto grid max-w-6xl gap-10 px-6 lg:grid-cols-[0.9fr_1.1fr]"
                >
                    <div class="glass card-shadow rounded-3xl p-8">
                        <p
                            class="text-sm uppercase tracking-[0.3em] text-slate-400"
                        >
                            Profile
                        </p>
                        <h2 class="mt-4 text-3xl font-semibold text-slate-100">
                            {{ portfolio.about.title }}
                        </h2>
                        <p class="mt-4 text-sm text-slate-400">
                            {{ portfolio.role }}
                        </p>
                        <div class="mt-8 grid gap-3 text-sm text-slate-300">
                            <div class="flex items-center gap-3">
                                <span
                                    class="h-2 w-2 rounded-full bg-accent"
                                ></span>
                                <span>Legacy system migration</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span
                                    class="h-2 w-2 rounded-full bg-accent-2"
                                ></span>
                                <span>SPA architecture with Vue</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span
                                    class="h-2 w-2 rounded-full bg-accent-3"
                                ></span>
                                <span>Government and academic systems</span>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-6 text-base text-slate-300">
                        <p
                            v-for="paragraph in portfolio.about.body"
                            :key="paragraph"
                            class="leading-relaxed"
                        >
                            {{ paragraph }}
                        </p>
                    </div>
                </div>
            </section>
            <section id="skills" class="section-pad">
                <div class="mx-auto max-w-6xl px-6">
                    <div class="flex items-center justify-between">
                        <h2 class="text-3xl font-semibold text-slate-100">
                            {{ portfolio.skills.title }}
                        </h2>
                        <span class="text-sm text-slate-400">Stack ready</span>
                    </div>
                    <div class="mt-8 grid gap-6 md:grid-cols-3">
                        <div
                            v-for="group in portfolio.skills.groups"
                            :key="group.label"
                            class="glass card-shadow rounded-2xl p-6"
                        >
                            <p
                                class="text-sm uppercase tracking-[0.2em] text-slate-400"
                            >
                                {{ group.label }}
                            </p>
                            <div class="mt-4 flex flex-wrap gap-2">
                                <span
                                    v-for="item in group.items"
                                    :key="item"
                                    class="rounded-full border border-slate-700 px-3 py-1 text-xs text-slate-200"
                                >
                                    {{ item }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="tools" class="section-pad">
                <div class="mx-auto max-w-6xl px-6">
                    <div class="flex items-center justify-between">
                        <h2 class="text-3xl font-semibold text-slate-100">
                            {{ portfolio.tools.title }}
                        </h2>
                        <span class="text-sm text-slate-400">Daily stack</span>
                    </div>
                    <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                        <div
                            v-for="tool in portfolio.tools.items"
                            :key="tool.name"
                            class="glass card-shadow rounded-2xl p-5"
                        >
                            <div class="flex items-center gap-3">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-900/70 text-xs font-semibold text-slate-100"
                                >
                                    {{ tool.short }}
                                </div>
                                <div>
                                    <p
                                        class="text-sm font-semibold text-slate-100"
                                    >
                                        {{ tool.name }}
                                    </p>
                                    <p class="text-xs text-slate-400">
                                        {{ tool.note }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="experience" class="section-pad">
                <div class="mx-auto max-w-6xl px-6">
                    <div
                        class="flex flex-wrap items-center justify-between gap-4"
                    >
                        <h2 class="text-3xl font-semibold text-slate-100">
                            {{ portfolio.experience.title }}
                        </h2>
                        <span class="text-sm text-slate-400"
                            >Hands-on delivery</span
                        >
                    </div>
                    <div class="mt-8 space-y-6">
                        <div
                            v-for="item in portfolio.experience.items"
                            :key="item.role"
                            class="glass card-shadow rounded-3xl p-8"
                        >
                            <div
                                class="flex flex-wrap items-center justify-between gap-3"
                            >
                                <div>
                                    <p
                                        class="text-xl font-semibold text-slate-100"
                                    >
                                        {{ item.role }}
                                    </p>
                                    <p class="text-sm text-slate-400">
                                        {{ item.org }}
                                    </p>
                                </div>
                                <span
                                    class="rounded-full border border-slate-700 px-4 py-1 text-xs text-slate-300"
                                >
                                    {{ item.date }}
                                </span>
                            </div>
                            <ul class="mt-4 space-y-2 text-sm text-slate-300">
                                <li
                                    v-for="point in item.summary"
                                    :key="point"
                                    class="flex gap-2"
                                >
                                    <span
                                        class="mt-1 h-2 w-2 shrink-0 rounded-full bg-accent"
                                    ></span>
                                    <span>{{ point }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section id="projects" class="section-pad">
                <div class="mx-auto max-w-6xl px-6">
                    <div
                        class="flex flex-wrap items-center justify-between gap-4"
                    >
                        <h2 class="text-3xl font-semibold text-slate-100">
                            {{ portfolio.projects.title }}
                        </h2>
                        <span class="text-sm text-slate-400"
                            >Selected work</span
                        >
                    </div>
                    <div class="mt-8 grid gap-6 lg:grid-cols-2">
                        <article
                            v-for="project in portfolio.projects.items"
                            :key="project.name"
                            class="glass card-shadow rounded-3xl p-6"
                        >
                            <div class="flex items-center justify-between">
                                <p
                                    class="text-xs uppercase tracking-[0.2em] text-slate-400"
                                >
                                    {{ project.type }}
                                </p>
                                <span class="text-xs text-slate-500">{{
                                    project.date
                                }}</span>
                            </div>
                            <h3
                                class="mt-3 text-xl font-semibold text-slate-100"
                            >
                                {{ project.name }}
                            </h3>
                            <p class="mt-3 text-sm text-slate-300">
                                {{ project.summary }}
                            </p>
                            <div class="mt-4 flex flex-wrap gap-2">
                                <span
                                    v-for="stack in project.stack"
                                    :key="stack"
                                    class="rounded-full bg-slate-800 px-3 py-1 text-xs text-slate-200"
                                >
                                    {{ stack }}
                                </span>
                            </div>
                            <ul class="mt-4 space-y-2 text-sm text-slate-300">
                                <li
                                    v-for="bullet in project.bullets"
                                    :key="bullet"
                                    class="flex gap-2"
                                >
                                    <span
                                        class="mt-1 h-2 w-2 shrink-0 rounded-full bg-accent-2"
                                    ></span>
                                    <span>{{ bullet }}</span>
                                </li>
                            </ul>
                        </article>
                    </div>
                </div>
            </section>
            <section id="availability" class="section-pad">
                <div class="mx-auto max-w-6xl px-6">
                    <div class="grid gap-6 lg:grid-cols-[1.1fr_0.9fr]">
                        <div class="glass card-shadow rounded-3xl p-8">
                            <p
                                class="text-sm uppercase tracking-[0.3em] text-slate-400"
                            >
                                Availability
                            </p>
                            <h2
                                class="mt-4 text-3xl font-semibold text-slate-100"
                            >
                                {{ portfolio.availability.title }}
                            </h2>
                            <p class="mt-3 text-sm text-slate-300">
                                {{ portfolio.availability.note }}
                            </p>
                            <div class="mt-6 flex flex-wrap gap-3">
                                <span
                                    v-for="option in portfolio.availability
                                        .options"
                                    :key="option"
                                    class="rounded-full border border-slate-700 px-4 py-2 text-xs text-slate-200"
                                >
                                    {{ option }}
                                </span>
                            </div>
                        </div>
                        <div
                            class="rounded-3xl border border-slate-800 bg-slate-900/40 p-8"
                        >
                            <p class="text-sm text-slate-400">
                                Preferred setup
                            </p>
                            <p
                                class="mt-4 text-xl font-semibold text-slate-100"
                            >
                                {{ portfolio.availability.location }}
                            </p>
                            <p class="mt-3 text-sm text-slate-300">
                                {{ portfolio.availability.timeline }}
                            </p>
                            <div class="mt-6 flex flex-wrap gap-3">
                                <a
                                    :href="`mailto:${portfolio.contact.email}`"
                                    class="rounded-full bg-white px-5 py-2 text-xs font-semibold text-slate-900 transition hover:-translate-y-0.5 hover:shadow-lg"
                                >
                                    Email me
                                </a>
                                <a
                                    :href="portfolio.cta.resumeUrl"
                                    download
                                    class="rounded-full border border-slate-700 px-5 py-2 text-xs font-semibold text-slate-100 transition hover:border-white"
                                >
                                    Resume
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact" class="section-pad">
                <div class="mx-auto max-w-6xl px-6">
                    <div class="glass card-shadow rounded-3xl p-8">
                        <div
                            class="flex flex-wrap items-center justify-between gap-4"
                        >
                            <div>
                                <p
                                    class="text-sm uppercase tracking-[0.3em] text-slate-400"
                                >
                                    Get in touch
                                </p>
                                <h2
                                    class="mt-3 text-3xl font-semibold text-slate-100"
                                >
                                    {{ portfolio.contact.title }}
                                </h2>
                                <p class="mt-2 text-sm text-slate-400">
                                    Let\'s build something reliable together.
                                </p>
                            </div>
                            <a
                                :href="`mailto:${portfolio.contact.email}`"
                                class="rounded-full bg-white px-6 py-3 text-sm font-semibold text-slate-900 transition hover:-translate-y-0.5 hover:shadow-lg"
                            >
                                {{ portfolio.contact.email }}
                            </a>
                        </div>
                        <div class="mt-6 flex flex-wrap gap-3">
                            <a
                                v-for="link in portfolio.contact.links"
                                :key="link.label"
                                :href="link.url"
                                class="rounded-full border border-slate-700 px-4 py-2 text-sm text-slate-200 transition hover:border-white"
                            >
                                {{ link.label }}
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="relative z-10">
            <div
                class="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-4 px-6 pb-10 text-xs text-slate-500"
            >
                <span>© 2026 {{ portfolio.name }}. All rights reserved.</span>
                <span class="font-mono">Built with Laravel, Vue, Tailwind</span>
            </div>
        </footer>
        <a
            v-show="showBackToTop"
            href="#top"
            class="fixed bottom-24 right-4 z-20 items-center gap-2 rounded-full border border-slate-700 bg-slate-950/90 px-4 py-2 text-xs font-semibold text-slate-200 shadow-lg backdrop-blur transition hover:border-white md:bottom-6 md:right-6"
        >
            Back to top
        </a>
        <div
            class="fixed bottom-0 left-0 right-0 z-20 border-t border-slate-800 bg-slate-950/90 px-4 py-3 backdrop-blur md:hidden"
        >
            <div class="mx-auto flex max-w-6xl items-center gap-3">
                <a
                    :href="`mailto:${portfolio.contact.email}`"
                    class="flex-1 rounded-full bg-white px-4 py-2 text-center text-xs font-semibold text-slate-900"
                >
                    Email
                </a>
                <a
                    :href="portfolio.cta.resumeUrl"
                    download
                    class="flex-1 rounded-full border border-slate-700 px-4 py-2 text-center text-xs font-semibold text-slate-100"
                >
                    Resume
                </a>
            </div>
        </div>
    </div>
</template>
<script setup>
import { computed, onBeforeUnmount, onMounted, ref } from "vue";
import { portfolio } from "./content/portfolio";
const initials = computed(() =>
    portfolio.name
        .split(" ")
        .filter(Boolean)
        .slice(0, 2)
        .map((part) => part[0])
        .join("")
        .toUpperCase(),
);
const showBackToTop = ref(false);
const updateBackToTop = () => {
    showBackToTop.value = window.scrollY > 400;
};
onMounted(() => {
    updateBackToTop();
    window.addEventListener("scroll", updateBackToTop, { passive: true });
});
onBeforeUnmount(() => {
    window.removeEventListener("scroll", updateBackToTop);
});
</script>
