export default function FunnelScript() {
    document.addEventListener("DOMContentLoaded", () => {
        const WA_NUMBER = "2348107157800", BRAND = "Honoura";
        const steps = [
            {
                key: "type",
                q: "What kind of event is it?",
                opts: [
                    ["Annual awards night", "Staff, sales or industry awards"],
                    ["Corporate gala or dinner", "Formal evening with recognitions"],
                    ["Conference or summit", "Speaker and delegate awards"],
                    ["Staff recognition", "Long-service and team awards"]
                ]
            },
            {
                key: "qty",
                q: "How many awards do you need?",
                opts: [
                    ["Under 10", "A small, select group"],
                    ["10 to 30", "A typical awards category list"],
                    ["30 to 100", "A large ceremony"],
                    ["100 or more", "Bulk order for a big event"]
                ]
            },
            {
                key: "when",
                q: "When is the event?",
                opts: [
                    ["Within 2 weeks", "Urgent, tell us right away"],
                    ["2 to 4 weeks", "Soon"],
                    ["1 to 3 months", "Comfortable lead time"],
                    ["Not fixed yet", "Still planning"]
                ]
            }
        ];

        const ans = {}, el = document.getElementById("step"), bars = [...document.querySelectorAll(".bar span")];
        if (!el) return;

        let cur = 0;
        const link = (m) => "https://wa.me/" + WA_NUMBER + "?text=" + encodeURIComponent(m);

        const msg = () => {
            const n = (ans.name || "").trim();
            return "Hello " + BRAND + (n ? ", my name is " + n + "." : ".") + " I would like a quote.\nEvent: " + ans.type + "\nAwards needed: " + ans.qty + "\nEvent date: " + ans.when + "\nPlease share design ideas and pricing.";
        };

        const setLinks = (m) => document.querySelectorAll("a.wa").forEach(a => a.href = link(m));
        setLinks("Hello " + BRAND + ", I would like to get a quote for my event.");

        const esc = (s) => s.replace(/[&<>"]/g, c => ({"&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;"}[c]));

        function draw() {
            bars.forEach((b, i) => b.classList.toggle("on", i <= cur));

            if (cur < 3) {
                const s = steps[cur];
                el.innerHTML = '<p class="q">' + s.q + '</p><div class="opts">' + s.opts.map(o => '<button type="button" class="opt" aria-pressed="' + (ans[s.key] === o[0]) + '" data-v="' + esc(o[0]) + '">' + o[0] + '<small>' + o[1] + '</small></button>').join("") + '</div><div class="nav">' + (cur ? '<button type="button" class="link" id="back">Back</button>' : "<span></span>") + '<span class="micro" style="margin:0">Step ' + (cur + 1) + ' of 4</span></div>';
                el.querySelectorAll(".opt").forEach(b => b.onclick = () => {
                    ans[s.key] = b.dataset.v;
                    cur++;
                    draw();
                });
            } else {
                el.innerHTML = '<p class="q">Almost done. Who should we address?</p><div class="field"><label for="nm">Your name (optional)</label><input id="nm" type="text" autocomplete="name" placeholder="e.g. Ada" value="' + esc(ans.name || "") + '"></div><div class="sum" id="sum"></div><a class="btn" id="go" href="#" target="_blank" rel="noopener" style="width:100%">Send to WhatsApp</a><div class="nav"><button type="button" class="link" id="back">Back</button><button type="button" class="link" id="reset">Start over</button></div>';
                const up = () => {
                    ans.name = document.getElementById("nm").value;
                    document.getElementById("go").href = link(msg());
                    document.getElementById("sum").innerHTML = "<b>Your request</b><br>" + esc(ans.type) + " · " + esc(ans.qty) + " awards · " + esc(ans.when);
                };
                document.getElementById("nm").oninput = up;
                up();
                document.getElementById("reset").onclick = () => {
                    for (const k in ans) delete ans[k];
                    cur = 0;
                    draw();
                };
            }

            const bk = document.getElementById("back");

            if (bk) bk.onclick = () => {
                cur--;
                draw();
            };
        }

        draw();

        function tick() {
            const n = new Date(),
                end = new Date(n.getFullYear(), n.getMonth() + 1, 1, 0, 0, -1),
                t = Math.max(0, end - n),
                mn = n.toLocaleString("en", {month: "long"});

            document.getElementById("d").textContent = Math.floor(t / 864e5);
            document.getElementById("h").textContent = Math.floor(t % 864e5 / 36e5);
            document.getElementById("m").textContent = Math.floor(t % 36e5 / 6e4);
            document.getElementById("dlLabel").textContent = mn + " booking window";
            document.getElementById("dlTitle").textContent = "Free design mockup for every " + mn + " booking";
        }

        tick();

        setInterval(tick, 3e4);
    });
}
