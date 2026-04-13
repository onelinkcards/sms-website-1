import React from 'react';

type TributeLandingProps = {
  logoSrc?: string;
  portraitSrc?: string;
  backgroundImageSrc?: string;
  ctaHref?: string;
};

export default function TributeLanding({
  logoSrc = '/assets/images/logo/group-21.png',
  portraitSrc = '/assets/images/tribute/sant-manjit-singh-ji.png',
  backgroundImageSrc = '/assets/images/background/sms-campus-bg.jpg',
  ctaHref = '/index.php?continue=1',
}: TributeLandingProps) {
  return (
    <div className="relative flex min-h-screen w-full flex-col items-center justify-center overflow-x-hidden bg-[#fdfbf7] text-gray-800 antialiased">
      <div
        className="pointer-events-none fixed inset-0 z-0 bg-cover bg-center bg-no-repeat"
        style={{ backgroundImage: `url('${backgroundImageSrc}')` }}
        aria-hidden="true"
      />
      <div className="pointer-events-none absolute inset-0 z-[1] bg-gradient-to-b from-white/60 via-white/80 to-[#fdfbf7]" aria-hidden="true" />

      <main className="relative z-10 mx-auto flex w-full max-w-md flex-col items-center space-y-8 px-6 py-12 text-center md:max-w-3xl md:space-y-12 md:px-12 md:py-24 lg:max-w-5xl">
        <header className="w-full space-y-4">
          <img
            src={logoSrc}
            alt="College logo"
            className="mx-auto h-auto max-h-14 w-auto max-w-[240px] object-contain md:max-h-16 md:max-w-[290px]"
            width={290}
            height={70}
          />
          <div className="mx-auto h-px w-full max-w-xs bg-[#d4af37]/35 md:max-w-sm" aria-hidden="true" />
        </header>

        <p className="font-['Cinzel',serif] text-[10px] font-semibold uppercase tracking-[0.28em] text-[#9c7c38] md:text-xs">
          TRIBUTE · DERA NANGALI SAHIB
        </p>

        <h1 className="max-w-[22ch] text-balance font-['Cormorant_Garamond',serif] text-4xl font-semibold italic leading-tight text-[#9c7c38] md:max-w-none md:text-6xl">
          In Reverence <span className="text-[#fdf6e3]">&amp;</span> Gratitude
        </h1>

        <figure className="w-64 max-w-full md:w-[400px] lg:w-[480px]">
          <img
            src={portraitSrc}
            alt="Sant Manjit Singh Ji — Mukhi, Dera Nangali Sahib"
            className="h-auto w-full object-contain object-center [mask-image:linear-gradient(to_bottom,black_60%,transparent_100%)] [-webkit-mask-image:linear-gradient(to_bottom,black_60%,transparent_100%)]"
            width={520}
            height={680}
          />
        </figure>

        <div className="w-full space-y-2">
          <p className="font-['Cormorant_Garamond',serif] text-xl font-semibold tracking-wide text-[#9c7c38] md:text-3xl">
            Sant Manjit Singh Ji
          </p>
          <p className="font-['Cinzel',serif] text-[10px] font-semibold uppercase leading-relaxed tracking-[0.16em] text-[#9c7c38] md:text-sm md:tracking-[0.2em]">
            Mukhi · Dera Nangali Sahib · Poonch, Jammu &amp; Kashmir
          </p>
        </div>

        <div className="h-[1px] w-full max-w-sm bg-[#d4af37]/40" aria-hidden="true" />

        <div className="w-full max-w-3xl space-y-6">
          <p className="text-pretty font-['Cormorant_Garamond',serif] text-base leading-relaxed text-gray-800 md:text-xl md:leading-loose">
            Under the guiding light of <strong className="font-bold">Sant Manjit Singh Ji</strong> of{' '}
            <strong className="font-bold text-[#9c7c38]">Dera Nangali Sahib</strong>, we embrace a path of selfless{' '}
            <em className="italic text-[#7a1b1b]">seva</em>, compassion, and humility. His teachings inspire us to
            understand that true excellence in any profession, including nursing, is deeply rooted in service to
            humanity and moral courage.
          </p>

          <div className="mx-auto h-[1px] w-full max-w-sm bg-[#d4af37]/40" aria-hidden="true" />

          <p className="text-pretty font-['Cormorant_Garamond',serif] text-base italic leading-relaxed text-gray-800 md:text-xl md:leading-loose">
            <strong className="font-semibold not-italic text-gray-900">
              Sant Manjit Singh College of Nursing &amp; Allied Healthcare
            </strong>{' '}
            draws profound inspiration from these values — preparing caregivers who combine clinical skill with empathy,
            integrity, and respect for every life they serve.
          </p>
        </div>

        <a
          href={ctaHref}
          className="inline-flex items-center justify-center rounded-full border border-[#d4af37]/50 bg-gradient-to-r from-[#7a1b1b] to-[#5a1414] px-8 py-4 text-sm font-medium uppercase tracking-widest text-white transition-all duration-300 hover:scale-105 hover:shadow-[0_0_20px_rgba(212,175,55,0.3)] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#d4af37]/70 focus-visible:ring-offset-2 focus-visible:ring-offset-[#fdfbf7]"
        >
          Enter Website
        </a>
      </main>
    </div>
  );
}
