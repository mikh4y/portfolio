@extends('layouts.app')

@section('content')

<section id="home" class="hero">

    <div class="hero-grid"></div>

    <div class="hero-container">

        <div class="hero-content">

            <p class="hero-eyebrow">
                <span></span>
                TURNING IDEAS INTO IMPACT
            </p>

            <p class="hello">Hello, I'm</p>

            <h1>
                Mikhaella De Castro<span>.</span>
            </h1>

            <p class="role">
                AI / LLM ANALYST
                <span>·</span>
                SOFTWARE DEVELOPER
            </p>

            <p class="description">
                I build, evaluate, and improve intelligent digital
                experiences through AI, data, and clean code.
            </p>

            <div class="hero-buttons">

                <a href="{{ asset('resume/Mikhaella_E_De_Castro.Resume.pdf') }}"
                   class="primary-btn"
                   download>
                    Download Resume
                </a>

                <a href="#contact" class="connect-btn">
                    Let's connect
                </a>

            </div>

        </div>

        <div class="code-visual">

            <div class="code-line line-one"></div>
            <div class="code-line line-two"></div>
            <div class="code-line line-three"></div>
            <div class="code-line line-four"></div>

            <div class="code-card code-card-one">

                <div class="code-row">
                    <span class="number">01</span>
                    <span class="purple">const</span>
                    <span class="white"> workflow = {</span>
                </div>

                <div class="code-row">
                    <span class="number">02</span>
                    <span class="pink">analyze:</span>
                    <span class="cyan">'AI',</span>
                </div>

                <div class="code-row">
                    <span class="number">03</span>
                    <span class="pink">design:</span>
                    <span class="cyan">'Solutions',</span>
                </div>

                <div class="code-row">
                    <span class="number">04</span>
                    <span class="pink">develop:</span>
                    <span class="cyan">'Systems'</span>
                </div>

                <div class="code-row">
                    <span class="number">05</span>
                    <span class="white">};</span>
                </div>

            </div>

            <div class="code-card code-card-two">

                <div class="code-row">
                    <span class="number">01</span>
                    <span class="purple">function</span>
                    <span class="white"> create() {</span>
                </div>

                <div class="code-row">
                    <span class="number">02</span>
                    <span class="purple">return</span>
                    <span class="cyan"> ideas</span>
                </div>

                <div class="code-row indent">
                    <span class="number">03</span>
                    <span class="pink">.toCode()</span>
                </div>

                <div class="code-row indent">
                    <span class="number">04</span>
                    <span class="pink">.toSolution();</span>
                </div>

                <div class="code-row">
                    <span class="number">05</span>
                    <span class="white">}</span>
                </div>

            </div>

            <div class="code-badge badge-one">// ANALYZE</div>
            <div class="code-badge badge-two">// DEVELOP</div>
            <div class="code-badge badge-three">// IMPROVE</div>


        </div>

    </div>

    <div class="hero-highlights">

        <div class="hero-highlight">
            <div class="highlight-icon">◉</div>
            <div>
                <strong>AI &amp; LLM SOLUTIONS</strong>
                <small>Evaluate. Improve. Build smarter AI.</small>
            </div>
        </div>

        <div class="hero-highlight">
            <div class="highlight-icon">▤</div>
            <div>
                <strong>DATA ANNOTATION</strong>
                <small>Accurate data for smarter models.</small>
            </div>
        </div>

        <div class="hero-highlight">
            <div class="highlight-icon">&lt;/&gt;</div>
            <div>
                <strong>WEB DEVELOPMENT</strong>
                <small>Functional, responsive digital solutions.</small>
            </div>
        </div>

        <div class="hero-highlight">
            <div class="highlight-icon">▥</div>
            <div>
                <strong>TECHNICAL SUPPORT</strong>
                <small>Practical solutions. Reliable systems.</small>
            </div>
        </div>

    </div>

</section>

@include('about')
@include('experience')
@include('projects')
@include('contact')

@endsection
