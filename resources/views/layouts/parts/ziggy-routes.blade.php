<script type="text/javascript">
    const Ziggy = {
        "url": "https:\/\/innerbalance.com",
        "port": null,
        "defaults": {},
        "routes": {
            "l5-swagger.default.api": {
                "uri": "api\/documentation",
                "methods": ["GET", "HEAD"]
            },
            "l5-swagger.default.docs": {
                "uri": "docs\/{jsonFile?}",
                "methods": ["GET", "HEAD"]
            },
            "l5-swagger.default.asset": {
                "uri": "docs\/asset\/{asset}",
                "methods": ["GET", "HEAD"]
            },
            "l5-swagger.default.oauth2_callback": {
                "uri": "api\/oauth2-callback",
                "methods": ["GET", "HEAD"]
            },
            "cashier.payment": {
                "uri": "stripe\/payment\/{id}",
                "methods": ["GET", "HEAD"]
            },
            "cashier.webhook": {
                "uri": "stripe\/webhook",
                "methods": ["POST"]
            },
            "sanctum.csrf-cookie": {
                "uri": "sanctum\/csrf-cookie",
                "methods": ["GET", "HEAD"]
            },
            "ignition.healthCheck": {
                "uri": "_ignition\/health-check",
                "methods": ["GET", "HEAD"]
            },
            "ignition.executeSolution": {
                "uri": "_ignition\/execute-solution",
                "methods": ["POST"]
            },
            "ignition.updateConfig": {
                "uri": "_ignition\/update-config",
                "methods": ["POST"]
            },
            "frontend.WithPersonaSample": {
                "uri": "withpersona-sample",
                "methods": ["GET", "HEAD"]
            },
            "frontend.customerVerified": {
                "uri": "customer-verified",
                "methods": ["POST"]
            },
            "frontend.stripeSample": {
                "uri": "stripe-sample",
                "methods": ["GET", "HEAD"]
            },
            "frontend.stripeBillingPortal": {
                "uri": "stripe-billing-portal",
                "methods": ["GET", "HEAD"]
            },
            "frontend.stripeSubscriptionCheckout": {
                "uri": "stripe-subscription-checkout",
                "methods": ["GET", "HEAD"]
            },
            "frontend.stripeSubscriptionCheckoutSuccess": {
                "uri": "stripe-subscription-checkout-success",
                "methods": ["GET", "HEAD"]
            },
            "frontend.stripeSubscriptionCheckoutCancel": {
                "uri": "stripe-subscription-checkout-cancel",
                "methods": ["GET", "HEAD"]
            },
            "frontend.eligibilityWaitlist": {
                "uri": "eligibility-waitlist",
                "methods": ["GET", "HEAD"]
            },
            "frontend.index": {
                "uri": "\/",
                "methods": ["GET", "HEAD"]
            },
            "frontend.about": {
                "uri": "about",
                "methods": ["GET", "HEAD"]
            },
            "frontend.faq": {
                "uri": "faq",
                "methods": ["GET", "HEAD"]
            },
            "frontend.treatments": {
                "uri": "treatments",
                "methods": ["GET", "HEAD"]
            },
            "frontend.learn": {
                "uri": "learn",
                "methods": ["GET", "HEAD"]
            },
            "frontend.article": {
                "uri": "article\/{slug}",
                "methods": ["GET", "HEAD"]
            },
            "frontend.reviews": {
                "uri": "reviews",
                "methods": ["GET", "HEAD"]
            },
            "frontend.sexualWellness": {
                "uri": "sexual-wellness",
                "methods": ["GET", "HEAD"]
            },
            "frontend.weightLoss": {
                "uri": "weight-loss",
                "methods": ["GET", "HEAD"]
            },
            "frontend.antiAging": {
                "uri": "anti-aging",
                "methods": ["GET", "HEAD"]
            },
            "frontend.hormoneBalance": {
                "uri": "hormone-balance",
                "methods": ["GET", "HEAD"]
            },
            "frontend.preQuestionaire": {
                "uri": "pre-questionaire",
                "methods": ["GET", "HEAD"]
            },
            "frontend.termsAndConditions": {
                "uri": "subscription-terms-and-conditions",
                "methods": ["GET", "HEAD"]
            },
            "frontend.termsOfUse": {
                "uri": "terms-of-use",
                "methods": ["GET", "HEAD"]
            },
            "frontend.consentToTreatAndTelehealthServices": {
                "uri": "consent-to-treat-and-telehealth-services",
                "methods": ["GET", "HEAD"]
            },
            "frontend.noticeOfPrivacyPractices": {
                "uri": "notice-of-privacy-practices-and-privacy-policy",
                "methods": ["GET", "HEAD"]
            },
            "frontend.theInnerBalanceMoneyBackPromise": {
                "uri": "the-inner-balance-money-back-promise",
                "methods": ["GET", "HEAD"]
            },
            "frontend.login": {
                "uri": "login",
                "methods": ["GET", "HEAD"]
            },
            "frontend.logUserIn": {
                "uri": "log-user-in",
                "methods": ["POST"]
            },
            "frontend.forceLogUserIn": {
                "uri": "force-log-user-in\/{id}",
                "methods": ["GET", "HEAD"]
            },
            "frontend.register": {
                "uri": "register",
                "methods": ["GET", "HEAD"]
            },
            "frontend.registerCustomer": {
                "uri": "register",
                "methods": ["POST"]
            },
            "frontend.forgotPassword": {
                "uri": "forgot-password",
                "methods": ["GET", "HEAD"]
            },
            "frontend.sendForgotPasswordMail": {
                "uri": "send-forgot-password-mail",
                "methods": ["POST"]
            },
            "frontend.resetPassword": {
                "uri": "reset-password\/{token}",
                "methods": ["GET", "HEAD"]
            },
            "frontend.setNewPassword": {
                "uri": "set-new-password",
                "methods": ["POST"]
            },
            "frontend.eligibilityWaitlistCreate": {
                "uri": "eligibility-waitlist-create",
                "methods": ["POST"]
            },
            "frontend.logout": {
                "uri": "logout",
                "methods": ["GET", "HEAD"]
            },
            "frontend.updateProfile": {
                "uri": "update-profile",
                "methods": ["POST"]
            },
            "frontend.createAddress": {
                "uri": "create-address",
                "methods": ["POST"]
            },
            "frontend.updateAddress": {
                "uri": "update-address",
                "methods": ["POST"]
            },
            "frontend.uploadIdCardPhoto": {
                "uri": "upload-id-card-photo",
                "methods": ["POST"]
            },
            "frontend.showQuestionaire": {
                "uri": "onboarding-questionaire",
                "methods": ["GET", "HEAD"]
            },
            "frontend.productDescription": {
                "uri": "product-description",
                "methods": ["GET", "HEAD"]
            },
            "frontend.home": {
                "uri": "home",
                "methods": ["GET", "HEAD"]
            },
            "frontend.thanksForPurchase": {
                "uri": "thanks-for-purchase",
                "methods": ["GET", "HEAD"]
            },
            "frontend.thanksForIdUpload": {
                "uri": "thanks-for-id-upload",
                "methods": ["GET", "HEAD"]
            },
            "frontend.manageSubscription": {
                "uri": "manage-subscription",
                "methods": ["GET", "HEAD"]
            },
            "frontend.pastOrders": {
                "uri": "past-orders",
                "methods": ["GET", "HEAD"]
            },
            "frontend.accountSettings": {
                "uri": "account-settings",
                "methods": ["GET", "HEAD"]
            },
            "frontend.editPhone": {
                "uri": "edit-phone",
                "methods": ["GET", "HEAD"]
            },
            "frontend.changePassword": {
                "uri": "change-password",
                "methods": ["GET", "HEAD"]
            },
            "admin.login": {
                "uri": "admin\/login",
                "methods": ["GET", "HEAD"]
            },
            "admin.logUserIn": {
                "uri": "admin\/log-user-in",
                "methods": ["POST"]
            },
            "admin.forgotPassword": {
                "uri": "admin\/forgot-password",
                "methods": ["GET", "HEAD"]
            },
            "admin.sendForgotPasswordMail": {
                "uri": "admin\/send-forgot-password-mail",
                "methods": ["POST"]
            },
            "admin.resetPassword": {
                "uri": "admin\/reset-password\/{token}",
                "methods": ["GET", "HEAD"]
            },
            "admin.setNewPassword": {
                "uri": "admin\/set-new-password",
                "methods": ["POST"]
            },
            "admin.dashboard": {
                "uri": "admin",
                "methods": ["GET", "HEAD"]
            },
            "admin.logout": {
                "uri": "admin\/logout",
                "methods": ["GET", "HEAD"]
            },
            "admin.myProfile": {
                "uri": "admin\/my-profile",
                "methods": ["GET", "HEAD"]
            },
            "admin.updateMyProfile": {
                "uri": "admin\/update-my-profile",
                "methods": ["POST"]
            },
            "admin.setNewPasswordProfile": {
                "uri": "admin\/set-new-password-profile",
                "methods": ["POST"]
            },
            "admin.pharmacies.index": {
                "uri": "admin\/pharmacies",
                "methods": ["GET", "HEAD"]
            },
            "admin.pharmacies.create": {
                "uri": "admin\/pharmacies\/create",
                "methods": ["GET", "HEAD"]
            },
            "admin.pharmacies.store": {
                "uri": "admin\/pharmacies",
                "methods": ["POST"]
            },
            "admin.pharmacies.show": {
                "uri": "admin\/pharmacies\/{pharmacy}",
                "methods": ["GET", "HEAD"]
            },
            "admin.pharmacies.edit": {
                "uri": "admin\/pharmacies\/{pharmacy}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {
                    "pharmacy": "id"
                }
            },
            "admin.pharmacies.update": {
                "uri": "admin\/pharmacies\/{pharmacy}",
                "methods": ["PUT", "PATCH"],
                "bindings": {
                    "pharmacy": "id"
                }
            },
            "admin.pharmacies.destroy": {
                "uri": "admin\/pharmacies\/{pharmacy}",
                "methods": ["DELETE"]
            },
            "admin.getPharmacies": {
                "uri": "admin\/pharmacies-get",
                "methods": ["POST"]
            },
            "admin.getPharmacyUsers": {
                "uri": "admin\/pharmacy-users-get",
                "methods": ["POST"]
            },
            "admin.createPharmacyUser": {
                "uri": "admin\/pharmacy-user-create",
                "methods": ["POST"]
            },
            "admin.createPharmacyUserValidation": {
                "uri": "admin\/pharmacy-user-create-validation",
                "methods": ["POST"]
            },
            "admin.updatePharmacyUser": {
                "uri": "admin\/pharmacy-user-update",
                "methods": ["POST"]
            },
            "admin.updatePharmacyUserValidation": {
                "uri": "admin\/pharmacy-user-update-validation",
                "methods": ["POST"]
            },
            "admin.stripe.testFunctions": {
                "uri": "admin\/stripe\/test-functions",
                "methods": ["GET", "HEAD"]
            },
            "admin.stripe.testConnection": {
                "uri": "admin\/stripe\/test-connection",
                "methods": ["POST"]
            },
            "admin.stripe.getCustomer": {
                "uri": "admin\/stripe\/get-customer",
                "methods": ["POST"]
            },
            "admin.lifefile.testFunctions": {
                "uri": "admin\/lifefile\/test-functions",
                "methods": ["GET", "HEAD"]
            },
            "admin.lifefile.testConnection": {
                "uri": "admin\/lifefile\/test-connection",
                "methods": ["POST"]
            },
            "admin.lifefile.sendOrder": {
                "uri": "admin\/lifefile\/send-order",
                "methods": ["POST"]
            },
            "admin.reports.customers.identified": {
                "uri": "admin\/reports\/customers\/identified",
                "methods": ["GET", "HEAD"]
            },
            "admin.reports.customers.unidentified": {
                "uri": "admin\/reports\/customers\/unidentified",
                "methods": ["GET", "HEAD"]
            },
            "admin.reports.customers.customDose": {
                "uri": "admin\/reports\/customers\/custom-dose",
                "methods": ["GET", "HEAD"]
            },
            "admin.reports.customers.getIdentifiedCustomers": {
                "uri": "admin\/reports\/customers\/identified-get",
                "methods": ["POST"]
            },
            "admin.reports.customers.getUnidentifiedCustomers": {
                "uri": "admin\/reports\/customers\/unidentified-get",
                "methods": ["POST"]
            },
            "admin.reports.customers.getCustomDoseCustomers": {
                "uri": "admin\/reports\/customers\/custom-dose-get",
                "methods": ["POST"]
            },
            "admin.articles.index": {
                "uri": "admin\/articles",
                "methods": ["GET", "HEAD"]
            },
            "admin.articles.create": {
                "uri": "admin\/articles\/create",
                "methods": ["GET", "HEAD"]
            },
            "admin.articles.store": {
                "uri": "admin\/articles",
                "methods": ["POST"]
            },
            "admin.articles.show": {
                "uri": "admin\/articles\/{article}",
                "methods": ["GET", "HEAD"]
            },
            "admin.articles.edit": {
                "uri": "admin\/articles\/{article}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {
                    "article": "id"
                }
            },
            "admin.articles.update": {
                "uri": "admin\/articles\/{article}",
                "methods": ["PUT", "PATCH"],
                "bindings": {
                    "article": "id"
                }
            },
            "admin.articles.destroy": {
                "uri": "admin\/articles\/{article}",
                "methods": ["DELETE"]
            },
            "admin.getArticles": {
                "uri": "admin\/articles-get",
                "methods": ["POST"]
            },
            "admin.deleteArticle": {
                "uri": "admin\/articles-delete",
                "methods": ["POST"]
            },
            "admin.restoreArticle": {
                "uri": "admin\/articles-restore",
                "methods": ["POST"]
            },
            "admin.uploadArticleImage": {
                "uri": "admin\/articles-upload-image",
                "methods": ["POST"]
            },
            "admin.customers.index": {
                "uri": "admin\/customers",
                "methods": ["GET", "HEAD"]
            },
            "admin.customers.create": {
                "uri": "admin\/customers\/create",
                "methods": ["GET", "HEAD"]
            },
            "admin.customers.store": {
                "uri": "admin\/customers",
                "methods": ["POST"]
            },
            "admin.customers.show": {
                "uri": "admin\/customers\/{customer}",
                "methods": ["GET", "HEAD"]
            },
            "admin.customers.edit": {
                "uri": "admin\/customers\/{customer}\/edit",
                "methods": ["GET", "HEAD"]
            },
            "admin.customers.update": {
                "uri": "admin\/customers\/{customer}",
                "methods": ["PUT", "PATCH"]
            },
            "admin.customers.destroy": {
                "uri": "admin\/customers\/{customer}",
                "methods": ["DELETE"]
            },
            "admin.getFilteredUsers": {
                "uri": "admin\/customers-get",
                "methods": ["POST"]
            },
            "admin.eligibilityWaitlist": {
                "uri": "admin\/eligibility-waitlist",
                "methods": ["GET", "HEAD"]
            },
            "admin.getWaitlistUsers": {
                "uri": "admin\/eligibility-waitlist-get",
                "methods": ["POST"]
            },
            "admin.getOnboardingQuestionaireAnswers": {
                "uri": "admin\/onboarding-questionaire-answers-get",
                "methods": ["POST"]
            },
            "admin.deleteWaitlistUser": {
                "uri": "admin\/eligibility-waitlist-delete",
                "methods": ["POST"]
            },
            "admin.restoreWaitlistUser": {
                "uri": "admin\/eligibility-waitlist-restore",
                "methods": ["POST"]
            },
            "admin.getCustomerNotes": {
                "uri": "admin\/customer-notes-get",
                "methods": ["POST"]
            },
            "admin.createCustomerNote": {
                "uri": "admin\/customer-note-create",
                "methods": ["POST"]
            },
            "admin.createCustomerNoteValidation": {
                "uri": "admin\/customer-note-create-validation",
                "methods": ["POST"]
            },
            "admin.updateCustomerNote": {
                "uri": "admin\/customer-note-update",
                "methods": ["POST"]
            },
            "admin.updateCustomerNoteValidation": {
                "uri": "admin\/customer-note-update-validation",
                "methods": ["POST"]
            }
        }
    };

    ! function(t, r) {
        "object" == typeof exports && "undefined" != typeof module ? module.exports = r() : "function" ==
            typeof define && define.amd ? define(r) : (t || self).route = r()
    }(this, function() {
        function t(t, r) {
            for (var e = 0; e < r.length; e++) {
                var n = r[e];
                n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object
                    .defineProperty(t, "symbol" == typeof(o = function(t, r) {
                        if ("object" != typeof t || null === t) return t;
                        var e = t[Symbol.toPrimitive];
                        if (void 0 !== e) {
                            var n = e.call(t, "string");
                            if ("object" != typeof n) return n;
                            throw new TypeError("@@toPrimitive must return a primitive value.")
                        }
                        return String(t)
                    }(n.key)) ? o : String(o), n)
            }
            var o
        }

        function r(r, e, n) {
            return e && t(r.prototype, e), n && t(r, n), Object.defineProperty(r, "prototype", {
                writable: !1
            }), r
        }

        function e() {
            return e = Object.assign ? Object.assign.bind() : function(t) {
                for (var r = 1; r < arguments.length; r++) {
                    var e = arguments[r];
                    for (var n in e) Object.prototype.hasOwnProperty.call(e, n) && (t[n] = e[n])
                }
                return t
            }, e.apply(this, arguments)
        }

        function n(t) {
            return n = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function(t) {
                return t.__proto__ || Object.getPrototypeOf(t)
            }, n(t)
        }

        function o(t, r) {
            return o = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function(t, r) {
                return t.__proto__ = r, t
            }, o(t, r)
        }

        function i(t, r, e) {
            return i = function() {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function() {})), !0
                } catch (t) {
                    return !1
                }
            }() ? Reflect.construct.bind() : function(t, r, e) {
                var n = [null];
                n.push.apply(n, r);
                var i = new(Function.bind.apply(t, n));
                return e && o(i, e.prototype), i
            }, i.apply(null, arguments)
        }

        function u(t) {
            var r = "function" == typeof Map ? new Map : void 0;
            return u = function(t) {
                if (null === t || -1 === Function.toString.call(t).indexOf("[native code]")) return t;
                if ("function" != typeof t) throw new TypeError(
                    "Super expression must either be null or a function");
                if (void 0 !== r) {
                    if (r.has(t)) return r.get(t);
                    r.set(t, e)
                }

                function e() {
                    return i(t, arguments, n(this).constructor)
                }
                return e.prototype = Object.create(t.prototype, {
                    constructor: {
                        value: e,
                        enumerable: !1,
                        writable: !0,
                        configurable: !0
                    }
                }), o(e, t)
            }, u(t)
        }
        var f = String.prototype.replace,
            a = /%20/g,
            c = "RFC3986",
            l = {
                default: c,
                formatters: {
                    RFC1738: function(t) {
                        return f.call(t, a, "+")
                    },
                    RFC3986: function(t) {
                        return String(t)
                    }
                },
                RFC1738: "RFC1738",
                RFC3986: c
            },
            s = Object.prototype.hasOwnProperty,
            v = Array.isArray,
            p = function() {
                for (var t = [], r = 0; r < 256; ++r) t.push("%" + ((r < 16 ? "0" : "") + r.toString(16))
                    .toUpperCase());
                return t
            }(),
            y = function(t, r) {
                for (var e = r && r.plainObjects ? Object.create(null) : {}, n = 0; n < t.length; ++n) void 0 !== t[
                    n] && (e[n] = t[n]);
                return e
            },
            d = {
                arrayToObject: y,
                assign: function(t, r) {
                    return Object.keys(r).reduce(function(t, e) {
                        return t[e] = r[e], t
                    }, t)
                },
                combine: function(t, r) {
                    return [].concat(t, r)
                },
                compact: function(t) {
                    for (var r = [{
                            obj: {
                                o: t
                            },
                            prop: "o"
                        }], e = [], n = 0; n < r.length; ++n)
                        for (var o = r[n], i = o.obj[o.prop], u = Object.keys(i), f = 0; f < u.length; ++f) {
                            var a = u[f],
                                c = i[a];
                            "object" == typeof c && null !== c && -1 === e.indexOf(c) && (r.push({
                                obj: i,
                                prop: a
                            }), e.push(c))
                        }
                    return function(t) {
                        for (; t.length > 1;) {
                            var r = t.pop(),
                                e = r.obj[r.prop];
                            if (v(e)) {
                                for (var n = [], o = 0; o < e.length; ++o) void 0 !== e[o] && n.push(e[o]);
                                r.obj[r.prop] = n
                            }
                        }
                    }(r), t
                },
                decode: function(t, r, e) {
                    var n = t.replace(/\+/g, " ");
                    if ("iso-8859-1" === e) return n.replace(/%[0-9a-f]{2}/gi, unescape);
                    try {
                        return decodeURIComponent(n)
                    } catch (t) {
                        return n
                    }
                },
                encode: function(t, r, e, n, o) {
                    if (0 === t.length) return t;
                    var i = t;
                    if ("symbol" == typeof t ? i = Symbol.prototype.toString.call(t) : "string" != typeof t && (
                            i = String(t)), "iso-8859-1" === e) return escape(i).replace(/%u[0-9a-f]{4}/gi,
                        function(t) {
                            return "%26%23" + parseInt(t.slice(2), 16) + "%3B"
                        });
                    for (var u = "", f = 0; f < i.length; ++f) {
                        var a = i.charCodeAt(f);
                        45 === a || 46 === a || 95 === a || 126 === a || a >= 48 && a <= 57 || a >= 65 && a <=
                            90 || a >= 97 && a <= 122 || o === l.RFC1738 && (40 === a || 41 === a) ? u += i
                            .charAt(f) : a < 128 ? u += p[a] : a < 2048 ? u += p[192 | a >> 6] + p[128 | 63 &
                            a] : a < 55296 || a >= 57344 ? u += p[224 | a >> 12] + p[128 | a >> 6 & 63] + p[
                                128 | 63 & a] : (a = 65536 + ((1023 & a) << 10 | 1023 & i.charCodeAt(f += 1)),
                                u += p[240 | a >> 18] + p[128 | a >> 12 & 63] + p[128 | a >> 6 & 63] + p[128 |
                                    63 & a])
                    }
                    return u
                },
                isBuffer: function(t) {
                    return !(!t || "object" != typeof t || !(t.constructor && t.constructor.isBuffer && t
                        .constructor.isBuffer(t)))
                },
                isRegExp: function(t) {
                    return "[object RegExp]" === Object.prototype.toString.call(t)
                },
                maybeMap: function(t, r) {
                    if (v(t)) {
                        for (var e = [], n = 0; n < t.length; n += 1) e.push(r(t[n]));
                        return e
                    }
                    return r(t)
                },
                merge: function t(r, e, n) {
                    if (!e) return r;
                    if ("object" != typeof e) {
                        if (v(r)) r.push(e);
                        else {
                            if (!r || "object" != typeof r) return [r, e];
                            (n && (n.plainObjects || n.allowPrototypes) || !s.call(Object.prototype, e)) && (r[
                                e] = !0)
                        }
                        return r
                    }
                    if (!r || "object" != typeof r) return [r].concat(e);
                    var o = r;
                    return v(r) && !v(e) && (o = y(r, n)), v(r) && v(e) ? (e.forEach(function(e, o) {
                        if (s.call(r, o)) {
                            var i = r[o];
                            i && "object" == typeof i && e && "object" == typeof e ? r[o] = t(i, e,
                                n) : r.push(e)
                        } else r[o] = e
                    }), r) : Object.keys(e).reduce(function(r, o) {
                        var i = e[o];
                        return r[o] = s.call(r, o) ? t(r[o], i, n) : i, r
                    }, o)
                }
            },
            b = Object.prototype.hasOwnProperty,
            h = {
                brackets: function(t) {
                    return t + "[]"
                },
                comma: "comma",
                indices: function(t, r) {
                    return t + "[" + r + "]"
                },
                repeat: function(t) {
                    return t
                }
            },
            m = Array.isArray,
            g = String.prototype.split,
            j = Array.prototype.push,
            w = function(t, r) {
                j.apply(t, m(r) ? r : [r])
            },
            O = Date.prototype.toISOString,
            E = l.default,
            R = {
                addQueryPrefix: !1,
                allowDots: !1,
                charset: "utf-8",
                charsetSentinel: !1,
                delimiter: "&",
                encode: !0,
                encoder: d.encode,
                encodeValuesOnly: !1,
                format: E,
                formatter: l.formatters[E],
                indices: !1,
                serializeDate: function(t) {
                    return O.call(t)
                },
                skipNulls: !1,
                strictNullHandling: !1
            },
            S = function t(r, e, n, o, i, u, f, a, c, l, s, v, p, y) {
                var b, h = r;
                if ("function" == typeof f ? h = f(e, h) : h instanceof Date ? h = l(h) : "comma" === n && m(h) && (
                        h = d.maybeMap(h, function(t) {
                            return t instanceof Date ? l(t) : t
                        })), null === h) {
                    if (o) return u && !p ? u(e, R.encoder, y, "key", s) : e;
                    h = ""
                }
                if ("string" == typeof(b = h) || "number" == typeof b || "boolean" == typeof b || "symbol" ==
                    typeof b || "bigint" == typeof b || d.isBuffer(h)) {
                    if (u) {
                        var j = p ? e : u(e, R.encoder, y, "key", s);
                        if ("comma" === n && p) {
                            for (var O = g.call(String(h), ","), E = "", S = 0; S < O.length; ++S) E += (0 === S ?
                                "" : ",") + v(u(O[S], R.encoder, y, "value", s));
                            return [v(j) + "=" + E]
                        }
                        return [v(j) + "=" + v(u(h, R.encoder, y, "value", s))]
                    }
                    return [v(e) + "=" + v(String(h))]
                }
                var T, k = [];
                if (void 0 === h) return k;
                if ("comma" === n && m(h)) T = [{
                    value: h.length > 0 ? h.join(",") || null : void 0
                }];
                else if (m(f)) T = f;
                else {
                    var x = Object.keys(h);
                    T = a ? x.sort(a) : x
                }
                for (var C = 0; C < T.length; ++C) {
                    var N = T[C],
                        D = "object" == typeof N && void 0 !== N.value ? N.value : h[N];
                    if (!i || null !== D) {
                        var F = m(h) ? "function" == typeof n ? n(e, N) : e : e + (c ? "." + N : "[" + N + "]");
                        w(k, t(D, F, n, o, i, u, f, a, c, l, s, v, p, y))
                    }
                }
                return k
            },
            T = Object.prototype.hasOwnProperty,
            k = Array.isArray,
            x = {
                allowDots: !1,
                allowPrototypes: !1,
                arrayLimit: 20,
                charset: "utf-8",
                charsetSentinel: !1,
                comma: !1,
                decoder: d.decode,
                delimiter: "&",
                depth: 5,
                ignoreQueryPrefix: !1,
                interpretNumericEntities: !1,
                parameterLimit: 1e3,
                parseArrays: !0,
                plainObjects: !1,
                strictNullHandling: !1
            },
            C = function(t) {
                return t.replace(/&#(\d+);/g, function(t, r) {
                    return String.fromCharCode(parseInt(r, 10))
                })
            },
            N = function(t, r) {
                return t && "string" == typeof t && r.comma && t.indexOf(",") > -1 ? t.split(",") : t
            },
            D = function(t, r, e, n) {
                if (t) {
                    var o = e.allowDots ? t.replace(/\.([^.[]+)/g, "[$1]") : t,
                        i = /(\[[^[\]]*])/g,
                        u = e.depth > 0 && /(\[[^[\]]*])/.exec(o),
                        f = u ? o.slice(0, u.index) : o,
                        a = [];
                    if (f) {
                        if (!e.plainObjects && T.call(Object.prototype, f) && !e.allowPrototypes) return;
                        a.push(f)
                    }
                    for (var c = 0; e.depth > 0 && null !== (u = i.exec(o)) && c < e.depth;) {
                        if (c += 1, !e.plainObjects && T.call(Object.prototype, u[1].slice(1, -1)) && !e
                            .allowPrototypes) return;
                        a.push(u[1])
                    }
                    return u && a.push("[" + o.slice(u.index) + "]"),
                        function(t, r, e, n) {
                            for (var o = n ? r : N(r, e), i = t.length - 1; i >= 0; --i) {
                                var u, f = t[i];
                                if ("[]" === f && e.parseArrays) u = [].concat(o);
                                else {
                                    u = e.plainObjects ? Object.create(null) : {};
                                    var a = "[" === f.charAt(0) && "]" === f.charAt(f.length - 1) ? f.slice(1, -1) :
                                        f,
                                        c = parseInt(a, 10);
                                    e.parseArrays || "" !== a ? !isNaN(c) && f !== a && String(c) === a && c >= 0 &&
                                        e.parseArrays && c <= e.arrayLimit ? (u = [])[c] = o : "__proto__" !== a &&
                                        (u[a] = o) : u = {
                                            0: o
                                        }
                                }
                                o = u
                            }
                            return o
                        }(a, r, e, n)
                }
            },
            F = function(t, r) {
                var e = function(t) {
                    if (!t) return x;
                    if (null != t.decoder && "function" != typeof t.decoder) throw new TypeError(
                        "Decoder has to be a function.");
                    if (void 0 !== t.charset && "utf-8" !== t.charset && "iso-8859-1" !== t.charset)
                    throw new TypeError("The charset option must be either utf-8, iso-8859-1, or undefined");
                    return {
                        allowDots: void 0 === t.allowDots ? x.allowDots : !!t.allowDots,
                        allowPrototypes: "boolean" == typeof t.allowPrototypes ? t.allowPrototypes : x
                            .allowPrototypes,
                        arrayLimit: "number" == typeof t.arrayLimit ? t.arrayLimit : x.arrayLimit,
                        charset: void 0 === t.charset ? x.charset : t.charset,
                        charsetSentinel: "boolean" == typeof t.charsetSentinel ? t.charsetSentinel : x
                            .charsetSentinel,
                        comma: "boolean" == typeof t.comma ? t.comma : x.comma,
                        decoder: "function" == typeof t.decoder ? t.decoder : x.decoder,
                        delimiter: "string" == typeof t.delimiter || d.isRegExp(t.delimiter) ? t.delimiter : x
                            .delimiter,
                        depth: "number" == typeof t.depth || !1 === t.depth ? +t.depth : x.depth,
                        ignoreQueryPrefix: !0 === t.ignoreQueryPrefix,
                        interpretNumericEntities: "boolean" == typeof t.interpretNumericEntities ? t
                            .interpretNumericEntities : x.interpretNumericEntities,
                        parameterLimit: "number" == typeof t.parameterLimit ? t.parameterLimit : x
                            .parameterLimit,
                        parseArrays: !1 !== t.parseArrays,
                        plainObjects: "boolean" == typeof t.plainObjects ? t.plainObjects : x.plainObjects,
                        strictNullHandling: "boolean" == typeof t.strictNullHandling ? t.strictNullHandling : x
                            .strictNullHandling
                    }
                }(r);
                if ("" === t || null == t) return e.plainObjects ? Object.create(null) : {};
                for (var n = "string" == typeof t ? function(t, r) {
                        var e, n = {},
                            o = (r.ignoreQueryPrefix ? t.replace(/^\?/, "") : t).split(r.delimiter, Infinity ===
                                r.parameterLimit ? void 0 : r.parameterLimit),
                            i = -1,
                            u = r.charset;
                        if (r.charsetSentinel)
                            for (e = 0; e < o.length; ++e) 0 === o[e].indexOf("utf8=") && ("utf8=%E2%9C%93" ===
                                o[e] ? u = "utf-8" : "utf8=%26%2310003%3B" === o[e] && (u = "iso-8859-1"),
                                i = e, e = o.length);
                        for (e = 0; e < o.length; ++e)
                            if (e !== i) {
                                var f, a, c = o[e],
                                    l = c.indexOf("]="),
                                    s = -1 === l ? c.indexOf("=") : l + 1; - 1 === s ? (f = r.decoder(c, x
                                        .decoder, u, "key"), a = r.strictNullHandling ? null : "") : (f = r
                                        .decoder(c.slice(0, s), x.decoder, u, "key"), a = d.maybeMap(N(c.slice(
                                            s + 1), r), function(t) {
                                            return r.decoder(t, x.decoder, u, "value")
                                        })), a && r.interpretNumericEntities && "iso-8859-1" === u && (a = C(
                                    a)), c.indexOf("[]=") > -1 && (a = k(a) ? [a] : a), n[f] = T.call(n, f) ? d
                                    .combine(n[f], a) : a
                            } return n
                    }(t, e) : t, o = e.plainObjects ? Object.create(null) : {}, i = Object.keys(n), u = 0; u < i
                    .length; ++u) {
                    var f = i[u],
                        a = D(f, n[f], e, "string" == typeof t);
                    o = d.merge(o, a, e)
                }
                return d.compact(o)
            },
            P = /*#__PURE__*/ function() {
                function t(t, r, e) {
                    var n, o;
                    this.name = t, this.definition = r, this.bindings = null != (n = r.bindings) ? n : {}, this
                        .wheres = null != (o = r.wheres) ? o : {}, this.config = e
                }
                var e = t.prototype;
                return e.matchesUrl = function(t) {
                    var r = this;
                    if (!this.definition.methods.includes("GET")) return !1;
                    var e = this.template.replace(/(\/?){([^}?]*)(\??)}/g, function(t, e, n, o) {
                            var i, u = "(?<" + n + ">" + ((null == (i = r.wheres[n]) ? void 0 : i.replace(
                                /(^\^)|(\$$)/g, "")) || "[^/?]+") + ")";
                            return o ? "(" + e + u + ")?" : "" + e + u
                        }).replace(/^\w+:\/\//, ""),
                        n = t.replace(/^\w+:\/\//, "").split("?"),
                        o = n[0],
                        i = n[1],
                        u = new RegExp("^" + e + "/?$").exec(o);
                    if (u) {
                        for (var f in u.groups) u.groups[f] = "string" == typeof u.groups[f] ?
                            decodeURIComponent(u.groups[f]) : u.groups[f];
                        return {
                            params: u.groups,
                            query: F(i)
                        }
                    }
                    return !1
                }, e.compile = function(t) {
                    var r = this,
                        e = this.parameterSegments;
                    return e.length ? this.template.replace(/{([^}?]+)(\??)}/g, function(n, o, i) {
                        var u;
                        if (!i && [null, void 0].includes(t[o])) throw new Error("Ziggy error: '" + o +
                            "' parameter is required for route '" + r.name + "'.");
                        if (r.wheres[o]) {
                            var f, a;
                            if (!new RegExp("^" + (i ? "(" + r.wheres[o] + ")?" : r.wheres[o]) + "$")
                                .test(null != (f = t[o]) ? f : "")) throw new Error("Ziggy error: '" +
                                o + "' parameter does not match required format '" + r.wheres[
                                o] + "' for route '" + r.name + "'.");
                            if (e[e.length - 1].name === o) return encodeURIComponent(null != (a = t[
                                o]) ? a : "").replace(/%2F/g, "/")
                        }
                        return encodeURIComponent(null != (u = t[o]) ? u : "")
                    }).replace(this.origin + "//", this.origin + "/").replace(/\/+$/, "") : this.template
                }, r(t, [{
                    key: "template",
                    get: function() {
                        return (this.origin + "/" + this.definition.uri).replace(/\/+$/, "")
                    }
                }, {
                    key: "origin",
                    get: function() {
                        return this.config.absolute ? this.definition.domain ? "" + this.config.url
                            .match(/^\w+:\/\//)[0] + this.definition.domain + (this.config.port ?
                                ":" + this.config.port : "") : this.config.url : ""
                    }
                }, {
                    key: "parameterSegments",
                    get: function() {
                        var t, r;
                        return null != (t = null == (r = this.template.match(/{[^}?]+\??}/g)) ?
                            void 0 : r.map(function(t) {
                                return {
                                    name: t.replace(/{|\??}/g, ""),
                                    required: !/\?}$/.test(t)
                                }
                            })) ? t : []
                    }
                }]), t
            }(),
            $ = /*#__PURE__*/ function(t) {
                var n, i;

                function u(r, n, o, i) {
                    var u;
                    if (void 0 === o && (o = !0), (u = t.call(this) || this).t = null != i ? i : "undefined" !=
                        typeof Ziggy ? Ziggy : null == globalThis ? void 0 : globalThis.Ziggy, u.t = e({}, u.t, {
                            absolute: o
                        }), r) {
                        if (!u.t.routes[r]) throw new Error("Ziggy error: route '" + r +
                            "' is not in the route list.");
                        u.i = new P(r, u.t.routes[r], u.t), u.u = u.l(n)
                    }
                    return u
                }
                i = t, (n = u).prototype = Object.create(i.prototype), n.prototype.constructor = n, o(n, i);
                var f = u.prototype;
                return f.toString = function() {
                    var t = this,
                        r = Object.keys(this.u).filter(function(r) {
                            return !t.i.parameterSegments.some(function(t) {
                                return t.name === r
                            })
                        }).filter(function(t) {
                            return "_query" !== t
                        }).reduce(function(r, n) {
                            var o;
                            return e({}, r, ((o = {})[n] = t.u[n], o))
                        }, {});
                    return this.i.compile(this.u) + function(t, r) {
                        var e, n = t,
                            o = function(t) {
                                if (!t) return R;
                                if (null != t.encoder && "function" != typeof t.encoder)
                                throw new TypeError("Encoder has to be a function.");
                                var r = t.charset || R.charset;
                                if (void 0 !== t.charset && "utf-8" !== t.charset && "iso-8859-1" !== t
                                    .charset) throw new TypeError(
                                    "The charset option must be either utf-8, iso-8859-1, or undefined"
                                    );
                                var e = l.default;
                                if (void 0 !== t.format) {
                                    if (!b.call(l.formatters, t.format)) throw new TypeError(
                                        "Unknown format option provided.");
                                    e = t.format
                                }
                                var n = l.formatters[e],
                                    o = R.filter;
                                return ("function" == typeof t.filter || m(t.filter)) && (o = t.filter), {
                                    addQueryPrefix: "boolean" == typeof t.addQueryPrefix ? t
                                        .addQueryPrefix : R.addQueryPrefix,
                                    allowDots: void 0 === t.allowDots ? R.allowDots : !!t.allowDots,
                                    charset: r,
                                    charsetSentinel: "boolean" == typeof t.charsetSentinel ? t
                                        .charsetSentinel : R.charsetSentinel,
                                    delimiter: void 0 === t.delimiter ? R.delimiter : t.delimiter,
                                    encode: "boolean" == typeof t.encode ? t.encode : R.encode,
                                    encoder: "function" == typeof t.encoder ? t.encoder : R.encoder,
                                    encodeValuesOnly: "boolean" == typeof t.encodeValuesOnly ? t
                                        .encodeValuesOnly : R.encodeValuesOnly,
                                    filter: o,
                                    format: e,
                                    formatter: n,
                                    serializeDate: "function" == typeof t.serializeDate ? t
                                        .serializeDate : R.serializeDate,
                                    skipNulls: "boolean" == typeof t.skipNulls ? t.skipNulls : R
                                        .skipNulls,
                                    sort: "function" == typeof t.sort ? t.sort : null,
                                    strictNullHandling: "boolean" == typeof t.strictNullHandling ? t
                                        .strictNullHandling : R.strictNullHandling
                                }
                            }(r);
                        "function" == typeof o.filter ? n = (0, o.filter)("", n) : m(o.filter) && (e = o
                            .filter);
                        var i = [];
                        if ("object" != typeof n || null === n) return "";
                        var u = h[r && r.arrayFormat in h ? r.arrayFormat : r && "indices" in r ? r
                            .indices ? "indices" : "repeat" : "indices"];
                        e || (e = Object.keys(n)), o.sort && e.sort(o.sort);
                        for (var f = 0; f < e.length; ++f) {
                            var a = e[f];
                            o.skipNulls && null === n[a] || w(i, S(n[a], a, u, o.strictNullHandling, o
                                .skipNulls, o.encode ? o.encoder : null, o.filter, o.sort, o
                                .allowDots, o.serializeDate, o.format, o.formatter, o
                                .encodeValuesOnly, o.charset))
                        }
                        var c = i.join(o.delimiter),
                            s = !0 === o.addQueryPrefix ? "?" : "";
                        return o.charsetSentinel && (s += "iso-8859-1" === o.charset ?
                            "utf8=%26%2310003%3B&" : "utf8=%E2%9C%93&"), c.length > 0 ? s + c : ""
                    }(e({}, r, this.u._query), {
                        addQueryPrefix: !0,
                        arrayFormat: "indices",
                        encodeValuesOnly: !0,
                        skipNulls: !0,
                        encoder: function(t, r) {
                            return "boolean" == typeof t ? Number(t) : r(t)
                        }
                    })
                }, f.v = function(t) {
                    var r = this;
                    t ? this.t.absolute && t.startsWith("/") && (t = this.p().host + t) : t = this.h();
                    var n = {},
                        o = Object.entries(this.t.routes).find(function(e) {
                            return n = new P(e[0], e[1], r.t).matchesUrl(t)
                        }) || [void 0, void 0];
                    return e({
                        name: o[0]
                    }, n, {
                        route: o[1]
                    })
                }, f.h = function() {
                    var t = this.p(),
                        r = t.pathname,
                        e = t.search;
                    return (this.t.absolute ? t.host + r : r.replace(this.t.url.replace(/^\w*:\/\/[^/]+/, ""),
                        "").replace(/^\/+/, "/")) + e
                }, f.current = function(t, r) {
                    var n = this.v(),
                        o = n.name,
                        i = n.params,
                        u = n.query,
                        f = n.route;
                    if (!t) return o;
                    var a = new RegExp("^" + t.replace(/\./g, "\\.").replace(/\*/g, ".*") + "$").test(o);
                    if ([null, void 0].includes(r) || !a) return a;
                    var c = new P(o, f, this.t);
                    r = this.l(r, c);
                    var l = e({}, i, u);
                    return !(!Object.values(r).every(function(t) {
                        return !t
                    }) || Object.values(l).some(function(t) {
                        return void 0 !== t
                    })) || Object.entries(r).every(function(t) {
                        return l[t[0]] == t[1]
                    })
                }, f.p = function() {
                    var t, r, e, n, o, i, u = "undefined" != typeof window ? window.location : {},
                        f = u.host,
                        a = u.pathname,
                        c = u.search;
                    return {
                        host: null != (t = null == (r = this.t.location) ? void 0 : r.host) ? t : void 0 === f ?
                            "" : f,
                        pathname: null != (e = null == (n = this.t.location) ? void 0 : n.pathname) ? e :
                            void 0 === a ? "" : a,
                        search: null != (o = null == (i = this.t.location) ? void 0 : i.search) ? o : void 0 ===
                            c ? "" : c
                    }
                }, f.has = function(t) {
                    return Object.keys(this.t.routes).includes(t)
                }, f.l = function(t, r) {
                    var n = this;
                    void 0 === t && (t = {}), void 0 === r && (r = this.i), null != t || (t = {}), t = [
                        "string", "number"
                    ].includes(typeof t) ? [t] : t;
                    var o = r.parameterSegments.filter(function(t) {
                        return !n.t.defaults[t.name]
                    });
                    if (Array.isArray(t)) t = t.reduce(function(t, r, n) {
                        var i, u;
                        return e({}, t, o[n] ? ((i = {})[o[n].name] = r, i) : "object" == typeof r ? r :
                            ((u = {})[r] = "", u))
                    }, {});
                    else if (1 === o.length && !t[o[0].name] && (t.hasOwnProperty(Object.values(r.bindings)[
                            0]) || t.hasOwnProperty("id"))) {
                        var i;
                        (i = {})[o[0].name] = t, t = i
                    }
                    return e({}, this.m(r), this.g(t, r))
                }, f.m = function(t) {
                    var r = this;
                    return t.parameterSegments.filter(function(t) {
                        return r.t.defaults[t.name]
                    }).reduce(function(t, n, o) {
                        var i, u = n.name;
                        return e({}, t, ((i = {})[u] = r.t.defaults[u], i))
                    }, {})
                }, f.g = function(t, r) {
                    var n = r.bindings,
                        o = r.parameterSegments;
                    return Object.entries(t).reduce(function(t, r) {
                        var i, u, f = r[0],
                            a = r[1];
                        if (!a || "object" != typeof a || Array.isArray(a) || !o.some(function(t) {
                                return t.name === f
                            })) return e({}, t, ((u = {})[f] = a, u));
                        if (!a.hasOwnProperty(n[f])) {
                            if (!a.hasOwnProperty("id")) throw new Error(
                                "Ziggy error: object passed as '" + f +
                                "' parameter is missing route model binding key '" + n[f] + "'."
                                );
                            n[f] = "id"
                        }
                        return e({}, t, ((i = {})[f] = a[n[f]], i))
                    }, {})
                }, f.valueOf = function() {
                    return this.toString()
                }, f.check = function(t) {
                    return this.has(t)
                }, r(u, [{
                    key: "params",
                    get: function() {
                        var t = this.v();
                        return e({}, t.params, t.query)
                    }
                }]), u
            }( /*#__PURE__*/ u(String));
        return function(t, r, e, n) {
            var o = new $(t, r, e, n);
            return t ? o.toString() : o
        }
    });
</script>
