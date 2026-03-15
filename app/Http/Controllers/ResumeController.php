<?php

namespace App\Http\Controllers;

use FPDF;
use Illuminate\Http\Response;

class ResumeController extends Controller
{
    public function show(): Response
    {
        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->SetAutoPageBreak(false);
        $pdf->AddPage();

        // Palette (matched to sample)
        $navy = [52, 61, 80];
        $softGray = [242, 243, 245];
        $midGray = [210, 213, 218];
        $ink = [31, 40, 55];
        $muted = [95, 104, 115];

        // Layout
        $pageW = 210;
        $pageH = 297;
        $headerH = 26;
        $sidebarW = 60;

        // Header bar
        $pdf->SetFillColor($navy[0], $navy[1], $navy[2]);
        $pdf->Rect(0, 0, $pageW, $headerH, 'F');
        $pdf->SetTextColor(255, 255, 255);
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->SetXY($sidebarW + 10, 7);
        $pdf->Cell(140, 7, 'KIM RYNEL C.(CLOMA) ELLORICO', 0, 1, 'L');
        $pdf->SetFont('Arial', '', 9);
        $pdf->SetTextColor(210, 216, 228);
        $pdf->SetXY($sidebarW + 10, 15);
        $pdf->Cell(140, 6, 'FULL-STACK WEB DEVELOPER (WEB + MOBILE)', 0, 1, 'L');

        // Sidebar background
        $pdf->SetFillColor($softGray[0], $softGray[1], $softGray[2]);
        $pdf->Rect(0, $headerH, $sidebarW, $pageH - $headerH, 'F');
        $pdf->SetDrawColor($midGray[0], $midGray[1], $midGray[2]);
        $pdf->Line($sidebarW, $headerH, $sidebarW, $pageH);

        // Avatar (square border to avoid unsupported ellipse)
        $photoPath = public_path('image/8532ecb3-6373-463f-8331-be9e13a738f7.jpg');
        $avatarX = 14;
        $avatarY = 10;
        $avatarSize = 32;
        if (file_exists($photoPath)) {
            $pdf->Image($photoPath, $avatarX, $avatarY, $avatarSize, $avatarSize);
        }
        $pdf->SetDrawColor(255, 255, 255);
        $pdf->SetLineWidth(1.2);
        $pdf->Rect($avatarX - 1, $avatarY - 1, $avatarSize + 2, $avatarSize + 2);
        $pdf->SetLineWidth(0.2);

        // Sidebar sections
        $sx = 8;
        $y = 52;
        $pdf->SetTextColor($ink[0], $ink[1], $ink[2]);
        $pdf->SetFont('Arial', 'B', 9);
        $this->sidebarSection($pdf, $sx, $y, 'CONTACT');

        $pdf->SetFont('Arial', '', 8);
        $this->sidebarLine($pdf, $sx, $y + 10, 'Email:');
        $this->sidebarLine($pdf, $sx, $y + 16, 'kimrynelellorico05@gmail.com');
        $this->sidebarLine($pdf, $sx, $y + 24, 'GitHub:');
        $this->sidebarLine($pdf, $sx, $y + 30, 'github.com/ElloricoDev');
        $this->sidebarLine($pdf, $sx, $y + 38, 'LinkedIn:');
        $this->sidebarLine($pdf, $sx, $y + 44, 'linkedin.com/in/kim-rynel-ellorico-');
        $this->sidebarLine($pdf, $sx, $y + 50, '379283326');
        $this->sidebarLine($pdf, $sx, $y + 58, 'Location: Surigao del Norte, PH');

        $y = 128;
        $pdf->SetFont('Arial', 'B', 9);
        $this->sidebarSection($pdf, $sx, $y, 'CERTIFICATIONS');
        $pdf->SetFont('Arial', '', 8);
        $this->sidebarLine($pdf, $sx, $y + 10, 'Not yet');

        $y = 160;
        $pdf->SetFont('Arial', 'B', 9);
        $this->sidebarSection($pdf, $sx, $y, 'LANGUAGES');
        $pdf->SetFont('Arial', '', 8);
        $this->sidebarLine($pdf, $sx, $y + 10, 'English (Conversational)');
        $this->sidebarLine($pdf, $sx, $y + 16, 'Filipino (Fluent)');

        // Main content area
        $mx = $sidebarW + 10;
        $my = $headerH + 12;

        $this->mainHeading($pdf, $mx, $my, 'CAREER OBJECTIVE');
        $pdf->SetFont('Arial', '', 9);
        $pdf->SetTextColor($ink[0], $ink[1], $ink[2]);
        $pdf->SetXY($mx, $my + 8);
        $pdf->MultiCell(135, 4.6, "Full-stack web developer with hands-on experience modernizing legacy Laravel systems into Vue + Tailwind SPAs, building academic and government-focused applications, and collaborating with ICT teams. Comfortable with Laravel, PHP, Vue.js, REST APIs, and MySQL, with a focus on clean, maintainable code and user-friendly interfaces.");

        $my = $pdf->GetY() + 6;
        $this->mainHeading($pdf, $mx, $my, 'KEY SKILLS');
        $pdf->SetFont('Arial', '', 9);
        $pdf->SetXY($mx, $my + 8);
        $pdf->MultiCell(135, 5, "- Laravel\n- PHP\n- Vue.js\n- Tailwind CSS\n- JavaScript\n- REST APIs\n- MySQL\n- Git\n- Vite\n- Postman");

        $my = $pdf->GetY() + 6;
        $this->mainHeading($pdf, $mx, $my, 'RELEVANT EXPERIENCE');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->SetXY($mx, $my + 8);
        $pdf->Cell(135, 5, 'Web Developer (OJT) | Surigao del Norte State University ICT Office', 0, 1);
        $pdf->SetFont('Arial', '', 8);
        $pdf->SetTextColor($muted[0], $muted[1], $muted[2]);
        $pdf->SetXY($mx, $my + 14);
        $pdf->Cell(135, 4, 'Jan 26, 2026 - Present', 0, 1);
        $pdf->SetTextColor($ink[0], $ink[1], $ink[2]);
        $pdf->SetXY($mx, $my + 20);
        $pdf->MultiCell(135, 4.2, "- Migrated a legacy Laravel Blade + Bootstrap interface to a Vue.js + Tailwind SPA.\n- Refactored outdated backend logic and fixed non-working modules.\n- Aligned UI/UX with ICT workflows through team collaboration.");

        $my = $pdf->GetY() + 6;
        $this->mainHeading($pdf, $mx, $my, 'EDUCATION');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->SetXY($mx, $my + 8);
        $pdf->Cell(135, 5, 'Surigao del Norte State University', 0, 1);
        $pdf->SetFont('Arial', '', 8);
        $pdf->SetTextColor($muted[0], $muted[1], $muted[2]);
        $pdf->SetXY($mx, $my + 14);
        $pdf->Cell(135, 4, 'Bachelor of Science in Information Technology', 0, 1);
        $pdf->SetTextColor($ink[0], $ink[1], $ink[2]);

        $my = $pdf->GetY() + 6;
        $this->mainHeading($pdf, $mx, $my, 'ACADEMIC PROJECTS');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->SetXY($mx, $my + 8);
        $pdf->Cell(135, 5, 'SNSU ICT Office Legacy Migration (OJT)', 0, 1);
        $pdf->SetFont('Arial', '', 8);
        $pdf->SetTextColor($muted[0], $muted[1], $muted[2]);
        $pdf->SetXY($mx, $my + 14);
        $pdf->Cell(135, 4, 'Jan 26, 2026 - Present', 0, 1);
        $pdf->SetTextColor($ink[0], $ink[1], $ink[2]);
        $pdf->SetXY($mx, $my + 20);
        $pdf->MultiCell(135, 4.2, "- Converted a legacy Blade + Bootstrap system to a modern Vue + Tailwind interface.\n- Updated backend code for compatibility and maintainability.");

        $my = $pdf->GetY() + 4;
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->SetXY($mx, $my);
        $pdf->Cell(135, 5, 'E-Baryo Library System (Capstone Project)', 0, 1);
        $pdf->SetFont('Arial', '', 8);
        $pdf->SetTextColor($muted[0], $muted[1], $muted[2]);
        $pdf->SetXY($mx, $my + 6);
        $pdf->Cell(135, 4, 'Jun 2025 - Oct 2025', 0, 1);
        $pdf->SetTextColor($ink[0], $ink[1], $ink[2]);
        $pdf->SetXY($mx, $my + 12);
        $pdf->MultiCell(135, 4.2, "- Community-focused system for cataloging, borrowing, and reporting.\n- Implemented role-based access, inventory management, and workflows.");

        $my = $pdf->GetY() + 4;
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->SetXY($mx, $my);
        $pdf->Cell(135, 5, 'Barangay Management System (Personal Project)', 0, 1);
        $pdf->SetFont('Arial', '', 8);
        $pdf->SetTextColor($muted[0], $muted[1], $muted[2]);
        $pdf->SetXY($mx, $my + 6);
        $pdf->Cell(135, 4, 'Jan 2026 - Mar 2026 (2nd week)', 0, 1);
        $pdf->SetTextColor($ink[0], $ink[1], $ink[2]);
        $pdf->SetXY($mx, $my + 12);
        $pdf->MultiCell(135, 4.2, "- Built resident profiles, clearance requests, and reporting dashboards.");

        $my = $pdf->GetY() + 4;
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->SetXY($mx, $my);
        $pdf->Cell(135, 5, 'OJT Tracking System + Mobile App (Academic Project)', 0, 1);
        $pdf->SetFont('Arial', '', 8);
        $pdf->SetTextColor($muted[0], $muted[1], $muted[2]);
        $pdf->SetXY($mx, $my + 6);
        $pdf->Cell(135, 4, 'Feb 2026 - Mar 14, 2026', 0, 1);
        $pdf->SetTextColor($ink[0], $ink[1], $ink[2]);
        $pdf->SetXY($mx, $my + 12);
        $pdf->MultiCell(135, 4.2, "- Tracked student OJT progress with mobile check-ins and approvals.");

        $content = $pdf->Output('S');

        return response($content)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'attachment; filename="Kim-Rynel-Ellorico-Resume.pdf"');
    }

    private function sidebarSection(FPDF $pdf, float $x, float $y, string $title): void
    {
        $pdf->SetXY($x, $y);
        $pdf->Cell(50, 5, $title, 0, 1, 'L');
        $pdf->SetDrawColor(200, 203, 208);
        $pdf->Line($x, $y + 6, $x + 44, $y + 6);
    }

    private function sidebarLine(FPDF $pdf, float $x, float $y, string $text): void
    {
        $pdf->SetXY($x, $y);
        $pdf->MultiCell(50, 4, $text);
    }

    private function mainHeading(FPDF $pdf, float $x, float $y, string $title): void
    {
        $pdf->SetTextColor(31, 40, 55);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetXY($x, $y);
        $pdf->Cell(130, 5, $title, 0, 1, 'L');
        $pdf->SetDrawColor(200, 203, 208);
        $pdf->Line($x, $y + 6, $x + 130, $y + 6);
    }
}