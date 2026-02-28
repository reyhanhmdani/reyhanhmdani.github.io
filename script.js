document.addEventListener('DOMContentLoaded', () => {
    
    // =============================================
    // THEME MANAGEMENT
    // =============================================
    const themeToggle = document.getElementById('theme-toggle');
    const themeBtns = themeToggle.querySelectorAll('.theme-toggle__btn');
    
    function getSystemTheme() {
        return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    }

    function setTheme(mode) {
        // Evaluate actual theme to apply to the DOM
        const actualTheme = mode === 'system' ? getSystemTheme() : mode;
        
        document.documentElement.setAttribute('data-theme', actualTheme);
        themeToggle.setAttribute('data-active', mode);
        localStorage.setItem('theme-preference', mode);
        
        // Update active button
        themeBtns.forEach(btn => {
            if (btn.dataset.themeValue === mode) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });
    }

    function initTheme() {
        const saved = localStorage.getItem('theme-preference');
        setTheme(saved || 'system');
    }

    themeBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            setTheme(btn.dataset.themeValue);
        });
    });

    // Listen for OS theme changes (matters when in 'system' mode)
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
        const current = localStorage.getItem('theme-preference');
        if (current === 'system') {
            // Re-apply to trigger any needed UI updates
            setTheme('system');
        }
    });

    initTheme();

    // =============================================
    // LOADER
    // =============================================
    const loader = document.getElementById('loader');
    window.addEventListener('load', () => {
        setTimeout(() => { loader.classList.add('hidden'); }, 800); 
    });

    // =============================================
    // MOBILE NAVIGATION
    // =============================================
    const mobileToggle = document.getElementById('mobile-toggle');
    const navbarEl = document.getElementById('navbar');
    const navLinksList = document.querySelectorAll('.nav-links a');

    mobileToggle.addEventListener('click', () => {
        navbarEl.classList.toggle('nav-open');
    });

    navLinksList.forEach(link => {
        link.addEventListener('click', () => {
            navbarEl.classList.remove('nav-open');
        });
    });

    // =============================================
    // TYPEWRITER EFFECT
    // =============================================
    const words = ["Fullstack Engineer.", "AI Specialist.", "Creative Developer.", "Data Analyst."];
    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    const typewriterEl = document.getElementById('typewriter');

    function type() {
        if(!typewriterEl) return;
        
        const currentWord = words[wordIndex];
        
        if (isDeleting) {
            typewriterEl.textContent = currentWord.substring(0, charIndex - 1);
            charIndex--;
        } else {
            typewriterEl.textContent = currentWord.substring(0, charIndex + 1);
            charIndex++;
        }

        let typeSpeed = isDeleting ? 40 : 100;

        if (!isDeleting && charIndex === currentWord.length) {
            typeSpeed = 2500;
            isDeleting = true;
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % words.length;
            typeSpeed = 500;
        }

        setTimeout(type, typeSpeed);
    }
    
    setTimeout(type, 1500);

    // =============================================
    // CODE WINDOW 3D TILT
    // =============================================
    const codeWindowWrapper = document.getElementById('code-window-tilt');
    const codeWindow = codeWindowWrapper?.querySelector('.code-window');

    if(codeWindowWrapper && codeWindow) {
        codeWindowWrapper.addEventListener('mousemove', (e) => {
            if(window.innerWidth > 992) {
                const rect = codeWindowWrapper.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateX = ((y - centerY) / centerY) * -6;
                const rotateY = ((x - centerX) / centerX) * 6;
                
                codeWindow.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
                codeWindow.style.transition = 'none';
            }
        });

        codeWindowWrapper.addEventListener('mouseleave', () => {
            codeWindow.style.transform = `rotateX(0deg) rotateY(0deg)`;
            codeWindow.style.transition = 'transform 0.6s cubic-bezier(0.16, 1, 0.3, 1)';
        });
    }

    // =============================================
    // SCROLL PROGRESS & NAVBAR
    // =============================================
    const progressBar = document.getElementById('progress-bar');
    const updateProgress = () => {
        const scrollPx = document.documentElement.scrollTop;
        const winHeightPx = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = `${(scrollPx / winHeightPx) * 100}%`;
        progressBar.style.width = scrolled;
    };

    const navbar = document.getElementById('navbar');
    const updateNavbar = () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    };

    // =============================================
    // INTERSECTION OBSERVER (Fade-up animations)
    // =============================================
    const fadeElements = document.querySelectorAll('.fade-up');
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.2
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('is-visible');
                }, index * 100); 
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    fadeElements.forEach(el => observer.observe(el));

    // =============================================
    // BUTTON INTERACTIONS (Ripple + Magnetic)
    // =============================================
    const buttons = document.querySelectorAll('.btn');
    
    buttons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            const x = e.clientX - e.target.getBoundingClientRect().left;
            const y = e.clientY - e.target.getBoundingClientRect().top;
            
            const ripple = document.createElement('span');
            ripple.classList.add('ripple');
            ripple.style.left = `${x}px`;
            ripple.style.top = `${y}px`;
            
            this.appendChild(ripple);
            
            setTimeout(() => { ripple.remove(); }, 600);
        });

        btn.addEventListener('mousemove', (e) => {
            const position = btn.getBoundingClientRect();
            const x = e.clientX - position.left - position.width / 2;
            const y = e.clientY - position.top - position.height / 2;
            btn.style.transform = `translate(${x * 0.08}px, ${y * 0.08}px) scale(1.02)`;
        });

        btn.addEventListener('mouseleave', () => {
            btn.style.transform = 'translate(0px, 0px) scale(1)';
            btn.style.transition = 'transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1)';
        });
        
        btn.addEventListener('mouseenter', () => {
            btn.style.transition = 'transform 0.1s linear';
        });
    });

    // =============================================
    // PROJECT CARD 3D TILT
    // =============================================
    const projectVisuals = document.querySelectorAll('.project-visual');
    
    projectVisuals.forEach(visual => {
        visual.addEventListener('mousemove', (e) => {
            const rect = visual.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const rotateX = ((y - centerY) / centerY) * -4;
            const rotateY = ((x - centerX) / centerX) * 4;
            visual.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
        });
        
        visual.addEventListener('mouseleave', () => {
            visual.style.transform = `rotateX(0deg) rotateY(0deg)`;
            visual.style.transition = 'transform 0.5s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s ease';
        });

        visual.addEventListener('mouseenter', () => {
            visual.style.transition = 'transform 0.1s ease, box-shadow 0.4s ease';
        });
    });

    // =============================================
    // PARALLAX EFFECT
    // =============================================
    const parallaxElements = document.querySelectorAll('.parallax');
    let ticking = false;

    const updateParallax = () => {
        const scrolled = window.pageYOffset;
        const windowHeight = window.innerHeight;

        parallaxElements.forEach(el => {
            const speed = el.dataset.speed || 0.5;
            
            if (el.classList.contains('hero-bg')) {
                const yPos = -(scrolled * speed); 
                el.style.transform = `translate3d(0, ${yPos}px, 0)`;
            } else {
                const rect = el.parentElement.getBoundingClientRect();
                const elementCenter = rect.top + (rect.height / 2);
                const distanceToCenter = elementCenter - (windowHeight / 2);
                
                const maxMove = rect.height * 0.035; 
                let yPos = distanceToCenter * speed;
                
                if (yPos > maxMove) yPos = maxMove;
                if (yPos < -maxMove) yPos = -maxMove;
                
                el.style.transform = `translate3d(0, ${yPos}px, 0)`;
            }
        });
        ticking = false;
    };

    window.addEventListener('scroll', () => {
        updateProgress(); 
        updateNavbar();   
        
        if (!ticking) {
            window.requestAnimationFrame(() => {
                updateParallax();
            });
            ticking = true;
        }
    }, { passive: true });

    // =============================================
    // AI CHAT WIDGET (Gemini API)
    // =============================================
    const apiKey = "[ENCRYPTION_KEY]"; 
    
    const chatWindow = document.getElementById('ai-chat-window');
    const toggleBtn = document.getElementById('ai-toggle-btn');
    const closeBtn = document.getElementById('close-chat');
    const chatMessages = document.getElementById('chat-messages');
    const chatInput = document.getElementById('chat-input');
    const sendBtn = document.getElementById('send-btn');
    
    let chatHistory = [];

    toggleBtn.addEventListener('click', () => {
        chatWindow.classList.remove('hidden');
        toggleBtn.style.display = 'none';
        chatInput.focus();
    });

    closeBtn.addEventListener('click', () => {
        chatWindow.classList.add('hidden');
        setTimeout(() => { toggleBtn.style.display = 'flex'; }, 300);
    });

    const addMessage = (text, isAi = false) => {
        const msgDiv = document.createElement('div');
        msgDiv.className = `message ${isAi ? 'ai-message' : 'user-message'}`;
        msgDiv.textContent = text;
        chatMessages.appendChild(msgDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
        
        if(isAi) {
            chatHistory.push({ role: 'model', parts: [{ text: text }] });
        } else {
            chatHistory.push({ role: 'user', parts: [{ text: text }] });
        }
    };

    const showTypingIndicator = () => {
        const indicator = document.createElement('div');
        indicator.className = 'typing-indicator';
        indicator.id = 'typing-indicator';
        indicator.innerHTML = '<span></span><span></span><span></span>';
        chatMessages.appendChild(indicator);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    };

    const hideTypingIndicator = () => {
        const indicator = document.getElementById('typing-indicator');
        if (indicator) indicator.remove();
    };

    const handleSend = async () => {
        const text = chatInput.value.trim();
        if (!text) return;

        addMessage(text, false);
        chatInput.value = '';
        showTypingIndicator();

        try {
            const responseText = await fetchGeminiResponse(text);
            hideTypingIndicator();
            addMessage(responseText, true);
        } catch (error) {
            hideTypingIndicator();
            addMessage("I'm sorry, I'm having trouble connecting right now. Please email Raihan directly!", true);
            console.error("Gemini API Error:", error);
        }
    };

    sendBtn.addEventListener('click', handleSend);
    chatInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') handleSend();
    });

    async function fetchGeminiResponse(userText, retries = 5) {
        const url = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash-preview-09-2025:generateContent?key=${apiKey}`;
        
        const systemPrompt = "You are the AI assistant for Raihan Hamdani, a Senior Creative Developer and AI Specialist. Your goal is to represent him professionally and answer questions from recruiters or clients. His skills include PHP, Laravel, JS, React, AI Engineering, Docker, Go, and Performance Ads. He has marketing experience managing ads for products like 'Detcha' and 'Arinna'. He also worked as a Software Engineer and Data Analyst at 'Ayobuatbaik' and 'DKM Masjid Salam Selfa', and previously interned at 'B_erl Cosmetics'. His projects include 'Ayobuatbaik.com', 'Andreraditya.guru', and 'Selfa.sch.id'. His contact is hello@raihanhamdani.dev. Keep answers concise, friendly, and highly professional. Reply in the language the user speaks.";
        
        const historyForPayload = chatHistory.slice(0, -1);

        const payload = {
            contents: [...historyForPayload, { role: 'user', parts: [{ text: userText }] }],
            systemInstruction: { parts: [{ text: systemPrompt }] }
        };

        let delay = 1000;
        for (let i = 0; i < retries; i++) {
            try {
                const response = await fetch(url, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(payload)
                });
                
                if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
                
                const data = await response.json();
                return data.candidates[0].content.parts[0].text;
            } catch (error) {
                if (i === retries - 1) throw error;
                await new Promise(res => setTimeout(res, delay));
                delay *= 2; 
            }
        }
    }

});
