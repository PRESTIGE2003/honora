export default function FunnelScript() {
    const init = () => {
        const $ = id => document.getElementById(id), el = $("step");
        if (!el) return;
        const root = $("quote"), WA = root?.dataset.wa || "2348107157800", BRAND = "Honoura";
        const steps = [
            {
                key: "type",
                q: "What kind of event is it?",
                opts: [["Annual awards night", "Staff, sales or industry awards"], ["Corporate gala or dinner", "Formal evening with recognitions"], ["Conference or summit", "Speaker and delegate awards"], ["Staff recognition", "Long-service and team awards"], ["Gifts or something else", "Tell us the details on WhatsApp"]]
            },
            {
                key: "qty",
                q: "How many awards or gifts do you need?",
                opts: [["Under 10", "A small, select group"], ["10 to 30", "A typical awards category list"], ["30 to 100", "A large ceremony"], ["100 or more", "Bulk order for a big event"]]
            },
            {
                key: "when",
                q: "When do you need it?",
                opts: [["Within 2 weeks", "Urgent, tell us right away"], ["2 to 4 weeks", "Soon"], ["1 to 3 months", "Comfortable lead time"], ["Not fixed yet", "Still planning"]]
            }
        ];
        const ans = {}, bars = [...document.querySelectorAll(".bar span")];
        let cur = 0, refocus = false;
        const link = m => `https://wa.me/${WA}?text=${encodeURIComponent(m)}`;
        const esc = s => String(s).replace(/[&<>"']/g, c => ({
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            '"': "&quot;",
            "'": "&#39;"
        }[c]));
        const track = (event, data = {}) => {
            try {
                window.dataLayer?.push({event, ...data});
            } catch (e) {
            }
        };
        const msg = () => {
            const n = (ans.name || "").trim();
            return `Hello ${BRAND}${n ? ", my name is " + n + "." : "."} I would like a quote.\nEvent: ${ans.type}\nQuantity: ${ans.qty}\nWhen: ${ans.when}\nPlease share design ideas and pricing.`;
        };
        const setLinks = m => document.querySelectorAll("a.wa").forEach(a => (a.href = link(m)));
        setLinks(`Hello ${BRAND}, I would like to get a quote for our event.`);

        const draw = () => {
            bars.forEach((b, i) => b.classList.toggle("on", i <= cur));
            if (cur < 3) {
                const s = steps[cur];
                el.innerHTML = `<p class="q" id="qh" tabindex="-1">${s.q}</p><div class="opts" role="group" aria-labelledby="qh">${s.opts.map(([v, d]) => `<button type="button" class="opt" aria-pressed="${ans[s.key] === v}" data-v="${esc(v)}">${esc(v)}<small>${esc(d)}</small></button>`).join("")}</div><div class="nav">${cur ? '<button type="button" class="link" id="back">← Back</button>' : "<span></span>"}<span class="text-xs text-muted">Step ${cur + 1} of 4</span></div>`;
                el.querySelectorAll(".opt").forEach(b => (b.onclick = () => {
                    ans[s.key] = b.dataset.v;
                    b.setAttribute("aria-pressed", "true");
                    track("quote_step", {step: cur + 1, key: s.key, value: ans[s.key]});
                    setTimeout(() => {
                        cur++;
                        refocus = true;
                        draw();
                    }, 140);
                }));
            } else {
                el.innerHTML = `<p class="q" id="qh" tabindex="-1">Almost done. Who should we address?</p><div class="field"><label for="nm">Your name (optional)</label><input id="nm" type="text" autocomplete="name" placeholder="e.g. Ada" value="${esc(ans.name || "")}"></div><div class="sum" id="sum"></div><a class="btn w-full" id="go" href="#" target="_blank" rel="noopener">Send to WhatsApp</a><div class="nav"><button type="button" class="link" id="back">← Back</button><button type="button" class="link" id="reset">Start over</button></div>`;
                const up = () => {
                    ans.name = $("nm").value;
                    $("go").href = link(msg());
                    $("sum").innerHTML = `<b>Your request</b><br>${esc(ans.type)} · ${esc(ans.qty)} · ${esc(ans.when)}`;
                    setLinks(msg());
                };
                $("nm").oninput = up;
                $("go").onclick = () => {
                    track("quote_sent", {type: ans.type, qty: ans.qty, when: ans.when});
                    try {
                        window.fbq?.("track", "Lead");
                    } catch (e) {
                    }
                };
                $("reset").onclick = () => {
                    for (const k in ans) delete ans[k];
                    cur = 0;
                    refocus = true;
                    draw();
                };
                up();
            }
            const bk = $("back");
            if (bk) bk.onclick = () => {
                cur--;
                refocus = true;
                draw();
            };
            if (refocus) {
                $("qh")?.focus({preventScroll: true});
                refocus = false;
            }
        };
        draw();

        const sticky = $("sticky");
        if (sticky && root && "IntersectionObserver" in window) new IntersectionObserver(([e]) => sticky.classList.toggle("hide", e.isIntersecting), {threshold: .15}).observe(root);

        const d = $("d"), h = $("h"), m = $("m");
        if (d && h && m) {
            const tick = () => {
                const n = new Date(), end = new Date(n.getFullYear(), n.getMonth() + 1, 1, 0, 0, -1),
                    t = Math.max(0, end - n), mn = n.toLocaleString("en", {month: "long"});
                d.textContent = Math.floor(t / 864e5);
                h.textContent = Math.floor(t % 864e5 / 36e5);
                m.textContent = Math.floor(t % 36e5 / 6e4);
                if ($("dlLabel")) $("dlLabel").textContent = mn + " booking window";
                if ($("dlTitle")) $("dlTitle").textContent = "Free design mockup for every " + mn + " booking";
            };
            tick();
            setInterval(tick, 3e4);
        }
    };
    document.readyState === "loading" ? document.addEventListener("DOMContentLoaded", init, {once: true}) : init();
}
